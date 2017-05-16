<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    {{--<link href="{{asset('static/theme/custom.min.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">

    {{--<link href="{{asset('static/theme/custom.min.css')}}" rel="stylesheet">--}}
    <script src="{{asset("static/vuejs/vue.js")}}"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.12/vue.js"></script>--}}
    <script src="{{asset("static/vuejs/vue-resource.min.js")}}"></script>
    {{--<script src="{{asset("static/model/medicalcase.js")}}"></script>--}}

    <style>
        body {
            position: relative;
        }

        .affix {
            top: 20px;
        }

        div.col-sm-9 div {
            height: 250px;
            font-size: 28px;
        }

        /*#section1 {color: #fff; background-color: #1E88E5;}*/
        /*#section2 {color: #fff; background-color: #673ab7;}*/
        /*#section3 {color: #fff; background-color: #ff9800;}*/
        /*#section41 {color: #fff; background-color: #00bcd4;}*/
        /*#section42 {color: #fff; background-color: #009688;}*/

        /*@media screen and (max-width: 810px) {*/
        /*#section1, #section2, #section3, #section41, #section42  {*/
        /*margin-left: 150px;*/
        /*}*/
        /*}*/
    </style>


</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
<div class="jumbotron">
    <div class="container">
        <h2>在线宠物医院学习系统</h2>

        <p> - V1.0</p>
    </div>
</div>
{{--<div class="container-fluid" style="background-color:#2196F3;color:#fff;height:220px;">--}}
{{--<h1>Scrollspy & Affix Example</h1>--}}
{{--<h3>Fixed vertical sidenav on scroll</h3>--}}
{{--<p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>--}}
{{--<p>The left menu sticks the page after you have scrolled a specified amount of pixels, and the links in the menu are automatically updated based on scroll position.</p>--}}
{{--</div>--}}
<br>

<div class="container">

    <div id="medicalcase">
        @{{ test }}
        <li v-for="item in items">
            <span> @{{ item.id }} </span><br>
            <span> @{{ item.name }} </span><br>
        </li>
    </div>


    <div id="app">
    @{{ message }}
    </div>

    <div>
        {{--@{{ test }}--}}
        {{--<div v-for="messages">--}}
            {{--<h1>@{{ name }}</h1>--}}
            {{--<h2>@{{ id }}</h2>--}}
        {{--</div>--}}
        <div class="row">

            <nav class="col-sm-3" id="myScrollspy">
                <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
                    <li><a href="#section1">传染病</a></li>
                    <li><a href="#section2">寄生虫病</a></li>
                    <li><a href="#section3">内科</a></li>
                    <li><a href="#section4">外产科疾病</a></li>
                    <li><a href="#section5">常用手术</a></li>
                    <li><a href="#section6">免疫</a></li>

                </ul>
            </nav>
            <div class="col-sm-9">
                <div id="section1" style="height: auto;">
                    <h1>传染病</h1>
                    <button class="btn-case" id="btn-qwr">犬瘟热</button>
                    <button class="btn-case" id="btn-qxxbd">犬细小病毒</button>
                    <button class="btn-case" id="btn-qcrxgy">犬传染性肝炎</button>
                </div>
                <div id="section2" style="height: auto;">
                    <h1>寄生虫病</h1>
                    <button class="btn-case" id="btn-hcb">蛔虫病</button>
                    <button class="btn-case" id="btn-gcb">钩虫病</button>
                    <button class="btn-case" id="btn-tcb">绦虫病</button>
                </div>
                <div id="section3" style="height: auto;">
                    <h1>内科</h1>
                    <button class="btn-case" id="btn-ky">口炎</button>
                    <button class="btn-case" id="btn-cy">肠炎</button>
                    <button class="btn-case" id="btn-cbm">肠便秘</button>
                </div>
                <div id="section4" style="height: auto;">
                    <h1>外产科疾病</h1>
                    <button class="btn-case" id="btn-ws">外伤</button>
                    <button class="btn-case" id="btn-wkgr">外科感染</button>
                    <button class="btn-case" id="btn-gz">骨折</button>
                    <button class="btn-case" id="btn-ws">外伤</button>
                    <button class="btn-case" id="btn-wkgr">外科感染</button>
                    <button class="btn-case" id="btn-gz">骨折</button>
                    <button class="btn-case" id="btn-ws">外伤</button>
                    <button class="btn-case" id="btn-wkgr">外科感染</button>
                    <button class="btn-case" id="btn-gz">骨折</button>
                    <button class="btn-case" id="btn-ws">外伤</button>
                    <button class="btn-case" id="btn-wkgr">外科感染</button>
                    <button class="btn-case" id="btn-gz">骨折</button>
                </div>
                <div id="section5" style="height: auto;">
                    <h1>常用手术</h1>
                    <button class="btn-case" id="btn-jy">绝育</button>
                    <button class="btn-case" id="btn-pfc">剖腹产</button>
                    <button class="btn-case" id="btn-smxzswqc">瞬膜腺增切除</button>
                </div>
                <div id="section6" style="height: auto;">
                    <h1>免疫</h1>
                    <button class="btn-case" id="btn-qmycx">犬免疫程序</button>
                    <button class="btn-case" id="btn-mmycx">猫免疫程序</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- jQuery 文件 -->
<script src="{{asset('static/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap JavaScript 文件 -->
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
{{--@include("common.theme_js")--}}




<script>
    new Vue({
        el: '#medicalcase',

        data: {
            newMessage: { name: '', message: '' },
            submitted: false,
            test: 'hello vue',
            items: null
        },

        computed: {
            errors: function() {
                for (var key in this.newMessage) {
                    if ( ! this.newMessage[key]) return true;
                }

                return false;
            }
        },

        mounted: function() {
            this.fetchMessages();
        },

        methods: {
            fetchMessages: function() {
                var self = this;
                $.get("api/medicalcase/messages", function (data) {
                    self.items = data;
                });
            }
            //,
//            onSubmitForm: function(e) {
//                e.preventDefault();
//
//                var message = this.newMessage;
//
//                this.messages.push(message);
//                this.newMessage = { name: '', message: '' };
//                this.submitted = true;
//
//                this.$http.post('api/messages', message);
//            }
        }
    });

</script>

</body>
</html>
