<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>لذائذ و أطايب</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/morris.css')}}">

    <!-- DataTables -->
    <link href="{{asset('dashboard/assets/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard/assets/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/switch-button-bootstrap/css/bootstrap-switch-button.css')}}">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css" rel="stylesheet">

    <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    @toastr_css
</head>
<style>
      body {
        font-family: 'Cairo';
        /* font-size: 22px; */
    }
    body {
	font-size: 1rem;
	/* display: flex; */
	min-height: 100vh;
	margin: 0 auto;
	/* justify-content: center; */
	/* align-items: center; */
	flex-direction: column;
	color: rgb(20, 20, 28);
}
.input-preview {
	border-radius: 4px;
	width: 200px;
	height: 200px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	position: relative;
	transition: ease-in-out 750ms;
}
.logoContainer{
	width:140px;
	height:151px;
	margin: 15px auto 0 auto;
	/*background: url(http://img1.wikia.nocookie.net/__cb20130901213905/battlebears/images/9/98/Team-icon-placeholder.png) no-repeat 0 0;*/
	padding: 11px 10px 21px 10px;
	text-align: center;
	line-height: 120px;
}
.logoContainer img{
	max-width:100%;
}
.fileContainer{
	background:#ccc;/* you can give it background img as well or any style you want*/
	width: 202px;
	height: 31px;
	overflow:hidden;
	position:relative;
	font-size:16px;
	line-height: 31px;
	color:#434343;
	padding: 0px 41px 0 53px;
	margin: 0 auto 60px auto;
	cursor: pointer !important;
}
.fileContainer span{
	overflow:hidden;
	display:block;
	white-space:nowrap;
	text-overflow:ellipsis;
	cursor: pointer;
}
.fileContainer input[type="file"]{
	opacity:0;
	margin: 0;
	padding: 0;
	width:100%;
	height:100%;
	left: 0;
	top: 0;
	position: absolute;
	cursor: pointer;
}
</style>