<!DOCTYPE html>
<html lang="en">
<head>
    <title>病例学习</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.1/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.1/vue-resource.js"></script>
    <style>
        body {
            position: relative;
        }
        li{
            margin-top:20px;font-size: 18px;
        }
        h3{
            /*color: ;*/
        }
        .affix {
            top: 20px;
        }
        .btn-case{
            border-color:#444444;
            background-color: #FFFFFF;
            border-radius: 10px;
            border-width: 3px;
            font-size: 20px;
            color: #444444;
            width: 200px;
            height:auto;
            margin-right: 5px;
            margin-bottom: 10px;
        }
        .btn-case:hover{
            color: #FFFFFF;
            background-color: #444444;
        }
        div.col-sm-9 div {
            height: 250px;
            font-size: 28px;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
<ol class="breadcrumb">
    <li><a href="#">职能学习</a></li>
    <li class="active">病例学习</li>
</ol>
<div class="container" id="medicalcase">
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
            <div v-for="category in allMedicalCaseCategory" style="height: auto;" :id="'section' + category.id">
                <h3> {{ category.name }}</h3>
                <button v-for="medicalcase in filtered(category.id)" class="btn-case">
                    {{ medicalcase.name }}
                </button>
            </div>





        </div>
    </div>
</div>

<script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    new Vue({
        el: '#medicalcase',

        data: {
            allMedicalCase: null,
            allMedicalCaseCategory: null
        },
        mounted: function() {
            this.fetchMessages();
        },
        methods: {
            fetchMessages: function() {
                var self = this;
                $.get("api/medicalcase/allMedicalCase", function (data) {
                    self.allMedicalCase = data;
                });
                $.get("api/medicalcase/allMedicalCaseCategory", function (data) {
                    self.allMedicalCaseCategory = data;
                });
            },
            filtered(id){
                return this.allMedicalCase.filter(rol => rol.category_id === id)
            }
        }
    });

</script>

</body>
</html>
