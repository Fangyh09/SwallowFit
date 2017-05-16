<?php

namespace App\Http\Controllers;

use App\Jobs\ShellJob;
use App\PhoneRecord;
use App\TheUser;
use App\Video;
use App\VideoQueue;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
class VideoController extends Controller
{
    public function getAllVideos() {
        return Video::all();
    }
	public function goTest() {
		//$res = exec('sudo touch old2.txt');
		//$process = new Process('/home/yinghong/cuddly-caffe/run_caffe_rtpose/run4.sh');
		//$res = exec('sudo ./run4.sh');
		$process = new Process('/home/yinghong/cuddly-caffe/run_caffe_rtpose/run2.sh /var/www/git/tmpLaravel/AndroidServer/laravel-master/public/video/worthit_left.mp4 /var/www/git/tmpLaravel/AndroidServer/laravel-master/public/video/worthit_right.mp4 30');
		$process->run();

		// executes after the command finishes
		if (!$process->isSuccessful()) {
			    throw new ProcessFailedException($process);
		}

		echo $process->getOutput();

		//$res = exec('/home/yinghong/cuddly-caffe/run_caffe_rtpose/run4.sh');
		//$res = exec('/home/yinghong/cuddly-caffe/run_caffe_rtpose/run2.sh /var/www/git/tmpLaravel/AndroidServer/laravel-master/public/video/dog.mp4 /var/www/git/tmpLaravel/AndroidServer/laravel-master/storage/app/uploads/2017-04-02-12-06-55-58e0e95f16c94.mp4 30');
		//echo $res;
	}
    public function goTest2() {

        $process = new Process('/home/yinghong/cuddly-caffe/run_caffe_rtpose/test2.sh ');
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        //$res = exec('sudo touch old2.txt');
        //$process = new Process('/home/yinghong/cuddly-caffe/run_caffe_rtpose/run4.sh');
        //$res = exec('sudo ./run4.sh');

        echo $process->getOutput();

        //$res = exec('/home/yinghong/cuddly-caffe/run_caffe_rtpose/run4.sh');
        //$res = exec('/home/yinghong/cuddly-caffe/run_caffe_rtpose/run2.sh /var/www/git/tmpLaravel/AndroidServer/laravel-master/public/video/dog.mp4 /var/www/git/tmpLaravel/AndroidServer/laravel-master/storage/app/uploads/2017-04-02-12-06-55-58e0e95f16c94.mp4 30');
        //echo $res;
    }

	public function getHistory($id) {
        $res = array();
        $res = \DB::table('phone_records')->where([
            ['androidId', '=' , $id],
        ])->join('videos', 'videos.id' , '=', 'videoId')->get(['name', 'phone_records.created_at', 'geneVideoName', 'imgPath']);

        $tmp = json_encode($res);
        return $tmp;
    }


    public function upload(Request $request)
    {
        //dd($request->all());

        $file = $request->file('mFile');
        //dd($file);
        //dd($request->all());

        if ($file && $file->isValid()) {

            $originalName = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $realPath = $file->getRealPath();
            $type = $file->getClientMimeType();     // image/jpeg


            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;

            $bool = \Storage::disk('uploads')->put($filename, file_get_contents($realPath));
            var_dump($bool);
            $videoId = $request->get("videoId");
            $androidId = $request->get("androidId");
            $isFront = $request->get("isFront");
            $frontStatus = 0;
            if ($isFront) {
                $frontStatus = 1;
            }
            else {
                $frontStatus = 0;
            }


            $phoneRecord = new PhoneRecord();
            $phoneRecord->androidId = $androidId;
            $phoneRecord->videoId = $videoId;
            $phoneRecord->geneVideoName = $filename;
            if ($phoneRecord->save()) {
                $standardVideo = Video::find($videoId);
                $standardVideoName = $standardVideo->videoPath;

                $standardPre = env('STANDARD_VIDEO_PRE_PATH');
                $userPre = env('USER_VIDEO_PRE_PATH');
                $shellPath = env('SHELL_PATH');

                $standardVideoFullName = $standardPre . $standardVideoName;
                $userVideoFullName = $userPre . $filename;

                $tmp = new PhoneRecord();
                $tmp->geneVideoName = $shellPath.' '.$userVideoFullName.' '.$standardVideoFullName.' '.'30';
                $tmp->save();
			//	exec('echo 1111 > new.txt');
			//	$process = new Process('echo 11111111111 > new.txt');
//                $process = new Process($shellPath.' '.$userVideoFullName.' '.$standardVideoFullName.' '.'30'.' '.$frontStatus);
//                $process->start();
//
//                while ($process->isRunning()) {
//                   //  waiting for process to finish
//                }

                $queueId = $this->dispatch(new ShellJob($shellPath, $userVideoFullName, $standardVideoFullName, $frontStatus));
                //dd($queueId);
                $videoqueue = new VideoQueue();
                $videoqueue->videoId = $videoId;
                $videoqueue->queueId = $queueId;

                if ($videoqueue->save()) {

                }
                dd($queueId);
                //echo $process->getOutput();

            }
            return 'finish2';
        }


        return 'finish';
    }
}







