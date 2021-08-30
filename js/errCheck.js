$(function(){
	//regist================================
	//ボタンを押す前
	//userName
    $('#reg_userName').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#reg_count1').html(valLength);
		if(valLength>20){
			$("#reg_label1").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#reg_userName").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#reg_label1").html("ユーザー名&nbsp;").css("color","#595757");
			$("#reg_userName").css({borderColor:"",background:""});
		}
    });
	//userId
	$('#reg_userId').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#reg_count2').html(valLength);
		if(valLength>20){
			$("#reg_label2").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#reg_userId").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else if(!regist.userId.value.match(/^[A-Za-z0-9]*$/)){
			$("#reg_label2").html("半角英数を入力&nbsp;").css("color","#ff0000");
			$("#reg_userId").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#reg_label2").html("ユーザーid&nbsp;").css("color","#595757");
			$("#reg_userId").css({borderColor:"",background:""});
		}
    });
	//email
	$('#reg_email').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#reg_count3').html(valLength);
		if(valLength>255){
			$("#reg_label3").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#reg_email").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else if(!regist.email.value.match(/^[A-Za-z0-9_.-@]*$/)){
			$("#reg_label3").html("正しく入力してください&nbsp;").css("color","#ff0000");
			$("#reg_email").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#reg_label3").html("メールアドレス&nbsp;").css("color","#595757");
			$("#reg_email").css({borderColor:"",background:""});
		}
    });
	//password
	$('#reg_pass').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#reg_count4').html(valLength);
		if(valLength>20){
			$("#reg_label4").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#reg_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else if(!regist.pass.value.match(/^[A-Za-z0-9.]*$/)){
			$("#reg_label4").html("半角英数を入力&nbsp;").css("color","#ff0000");
			$("#reg_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#reg_label4").html("パスワード&nbsp;").css("color","#595757");
			$("#reg_pass").css({borderColor:"",background:""});
		}
    });
	
	//ボタンを押したとき
	$(".regist_sub").click(function(){
		var count = 0;
		//userName
		var valLength_name = $("#reg_userName").val().length;
		if(regist.userName.value==""){
			$("#reg_label1").html("入力してください&nbsp;").css("color","#ff0000");
			$("#reg_userName").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_name>20){
			$("#reg_label1").html("20文字以内で入力&nbsp;").css("color","#ff0000");
			$("#reg_userName").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//userId
		var valLength_id = $("#reg_userId").val().length;
		if(regist.userId.value==""){
			$("#reg_label2").html("入力してください&nbsp;").css("color","#ff0000");
			$("#reg_userId").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_id>20 || valLength_id<8){
			$("#reg_label2").html("8-20文字で入力&nbsp;").css("color","#ff0000");
			$("#reg_userId").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(!regist.userId.value.match(/^[A-Za-z0-9]*$/)){
			$("#reg_label2").html("半角英数を入力&nbsp;").css("color","#ff0000");
			$("#reg_userId").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//email
		var valLength_email = $("#reg_email").val().length;
		if(regist.email.value==""){
			$("#reg_label3").html("入力してください&nbsp;").css("color","#ff0000");
			$("#reg_email").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_email>255){
			$("#reg_label3").html("255文字以内で入力&nbsp;").css("color","#ff0000");
			$("#reg_email").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(!regist.email.value.match(/^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/)){
			$("#reg_label3").html("正しく入力してください&nbsp;").css("color","#ff0000");
			$("#reg_email").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//pass
		var valLength_pass = $("#reg_pass").val().length;
		if(regist.pass.value==""){
			$("#reg_label4").html("入力してください&nbsp;").css("color","#ff0000");
			$("#reg_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_pass>20 || valLength_pass<8){
			$("#reg_label4").html("8-20文字で入力&nbsp;").css("color","#ff0000");
			$("#reg_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(!regist.pass.value.match(/^[A-Za-z0-9]*$/)){
			$("#reg_label4").html("半角英数を入力&nbsp;").css("color","#ff0000");
			$("#reg_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		if(count==1){
			return false;
		}else{
			return true;
		}
	});
	//idとmailの一致を判定
	var id_err = document.getElementById('id_err');
	var id_err_text = 0;
	if(document.getElementById('id_err')!=null){
		id_err_text = id_err.textContent;
	}
	if(id_err_text==1){
		$("#reg_label2").html("登録済みのidです&nbsp;").css("color","#ff0000");
		$("#reg_userId").css({borderColor:"#ff0000",background:"#ffe0e0"});
	}
	var email_err = document.getElementById('email_err');
	var email_err_text = 0;
	if(document.getElementById('email_err')!=null){
		email_err_text = email_err.textContent;
	}
	if(email_err_text==1){
		$("#reg_label3").html("登録済みのアドレスです&nbsp;").css("color","#ff0000");
		$("#reg_email").css({borderColor:"#ff0000",background:"#ffe0e0"});
	}
	
	//login================================
	//ボタンを押す前
	//userId email
	$('#login_post_user').bind('keydown keyup keypress change',function(){
		if(!login.post_user.value.match(/^[A-Za-z0-9_.-@]*$/)){
			$("#login_label1").html("正しく入力してください&nbsp;").css("color","#ff0000");
			$("#login_post_user").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#login_label1").html("id または メールアドレス&nbsp;").css("color","#595757");
			$("#login_post_user").css({borderColor:"",background:""});
		}
	});
	//password
	$('#login_post_pass').bind('keydown keyup keypress change',function(){
		var valLength = $(this).val().length;
		$('#login_count2').html(valLength);
		if(valLength>20){
			$("#login_label2").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#login_post_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else if(!login.post_pass.value.match(/^[A-Za-z0-9]*$/)){
			$("#login_label2").html("半角英数字で入力&nbsp;").css("color","#ff0000");
			$("#login_post_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#login_label2").html("パスワード&nbsp;").css("color","#595757");
			$("#login_post_pass").css({borderColor:"",background:""});
		}
	});
	//ボタンを押した時
	$(".login_sub").click(function(){
		var count = 0;
		//userId email
		var valLength = $("#login_post_user").val().length;
		if(login.post_user.value==""){
			$("#login_label1").html("入力してください&nbsp;").css("color","#ff0000");
			$("#login_post_user").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(!login.post_user.value.match(/^[A-Za-z0-9_.-@]*$/)){
			$("#login_label1").html("正しく入力してください&nbsp;").css("color","#ff0000");
			$("#login_post_user").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//pass
		var valLength = $("#login_post_pass").val().length;
		if(login.post_pass.value==""){
			$("#login_label2").html("入力してください&nbsp;").css("color","#ff0000");
			$("#login_post_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength>20){
			$("#login_label2").html("20文字以内で入力&nbsp;").css("color","#ff0000");
			$("#login_post_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(!login.post_pass.value.match(/^[A-Za-z0-9]*$/)){
			$("#login_label2").html("正しく入力してください&nbsp;").css("color","#ff0000");
			$("#login_post_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		if(count==1){
			return false;
		}else{
			return true;
		}
	});
	//idかアドレスと、パスワードが一致しているか
	var err = document.getElementById('err');
	var err_text = 0;
	if(document.getElementById('err')!=null){
		err_text = err.textContent;
	}
	if(err_text==1){
		$("#login_label1, #login_label2").html("入力内容をご確認ください").css("color","#ff0000");
		$("#login_post_user, #login_post_pass").css({borderColor:"#ff0000",background:"#ffe0e0"});
	}
	
	//post================================
	//ボタンを押す前
	//title
    $('#postTitle').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#post_count1').html(valLength);
		if(valLength>30){
			$("#post_label1").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#postTitle").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#post_label1").html("タイトル&nbsp;").css("color","#595757");
			$("#postTitle").css({borderColor:"",background:""});
		}
	});
	//photo
	$('#photo').change(function(e){
		//ファイルオブジェクトを取得する
		var file = e.target.files[0];
		var reader = new FileReader();
		//画像でない場合は処理終了
		if(file.type.match(/jpg|jpeg|png|gif/i) == null){
			$("#post_labelP").html("jpeg、png、gifのみ使用可能です&nbsp;").css("color","#ff0000");
		}else{
			$("#post_labelP").html("画像&nbsp;").css("color","#595757");
		}
		//アップロードした画像を設定する
		reader.onload = (function(file){
			return function(e){
				$("#preview").attr("src", e.target.result);
				$("#preview").attr("title", file.name);
			};
		})(file);
		reader.readAsDataURL(file);
		var width = $('#photo').width();
	});
	//mountain
	$('#postMountain').bind('keydown keyup keypress change',function(){
		if(post.mountain.value!="選択してください"){
			$("#post_label2").html("山名&nbsp;").css("color","#595757");
			$("#postMountain").css({borderColor:"",background:""});
		}
	});
	//date
	$('#postEntryDate, #postDescentDate').bind('change',function(){
		var entry = $('#postEntryDate').val();
		var entryYear = (entry.slice(0,4));
		var entryMonth = (entry.slice(5,7));
		var entryDay = (entry.slice(8));
		var entryDate = new Date(entryYear, entryMonth, entryDay);
		var descent = $('#postDescentDate').val();
		if(descent == ""){
			descent = "9999-12-31";
		}
		var descentYear = (descent.slice(0,4));
		var descentMonth = (descent.slice(5,7));
		var descentDay = (descent.slice(8));
		var descentDate = new Date(descentYear, descentMonth, descentDay);
		if(entryDate.getTime() > descentDate.getTime()){
			$("#post_label3").html("入山日は下山日より前に設定してください&nbsp;").css("color","#ff0000");
			$("#postEntryDate, #postDescentDate").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#post_label3").html("入山日&nbsp;").css("color","#595757");
			$("#postEntryDate, #postDescentDate").css({borderColor:"",background:""});
		}
	 });
	//wether
	$('#postWeather').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#post_count5').html(valLength);
		if(valLength>30){
			$("#post_label5").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#postWeather").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#post_label5").html("天候&nbsp;").css("color","#595757");
			$("#postWeather").css({borderColor:"",background:""});
		}
    });
	//course1
	$('#postCourse1').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#post_count6').html(valLength);
		if(valLength>100){
			$("#post_label6").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#postCourse1").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#post_label6").html("コース1&nbsp;").css("color","#595757");
			$("#postCourse1").css({borderColor:"",background:""});
		}
    });
	//course2
	$('#postCourse2').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#post_count7').html(valLength);
		if(valLength>100){
			$("#post_label7").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#postCourse2").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#post_label7").html("コース2&nbsp;").css("color","#595757");
			$("#postCourse2").css({borderColor:"",background:""});
		}
    });
	//course3
	$('#postCourse3').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#post_count8').html(valLength);
		if(valLength>100){
			$("#post_label8").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#postCourse3").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#post_label8").html("コース3&nbsp;").css("color","#595757");
			$("#postCourse3").css({borderColor:"",background:""});
		}
    });
	//time
	$('#postTime').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#post_count9').html(valLength);
		if(valLength>50){
			$("#post_label9").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#postTime").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#post_label9").html("タイム&nbsp;").css("color","#595757");
			$("#postTime").css({borderColor:"",background:""});
		}
    });
	//gear
	$('#postGear').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#post_count10').html(valLength);
		if(valLength>300){
			$("#post_label10").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#postGear").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#post_label10").html("装備&nbsp;").css("color","#595757");
			$("#postGear").css({borderColor:"",background:""});
		}
    });
	//text
	$('#postText').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#post_count11').html(valLength);
		if(valLength>1000){
			$("#post_label11").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#postText").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#post_label11").html("テキスト&nbsp;").css("color","#595757");
			$("#postText").css({borderColor:"",background:""});
		}
	});
	
	//ボタンを押した時
	$(".postSubmit").click(function(){
		var count = 0;
		//title
		var valLength_title = $("#postTitle").val().length;
		if(post.postTitle.value==""){
			$("#post_label1").html("入力してください&nbsp;").css("color","#ff0000");
			$("#postTitle").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_title>30){
			$("#post_label1").html("30文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#postTitle").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//photo
		var file = document.querySelector('#photo').files[0];
		if(file==null){
			if(post.preview.src==null){
			$("#post_labelP").html("画像を選択してください&nbsp;").css("color","#ff0000");
			count = 1;
			}
		}else if(file.type.match(/jpg|jpeg|png|gif/i) == null){
			$("#post_labelP").html("jpeg、png、gifのみ使用可能です&nbsp;").css("color","#ff0000");
			count = 1;
		}
		//mountain
		if(post.mountain.value=="選択してください"){
			$("#post_label2").html("山名を選択してください&nbsp;").css("color","#ff0000");
			$("#postMountain").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//date
		var entry = $('#postEntryDate').val();
		var entryYear = (entry.slice(0,4));
		var entryMonth = (entry.slice(5,7));
		var entryDay = (entry.slice(8));
		var entryDate = new Date(entryYear, entryMonth, entryDay);
		var descent = $('#postDescentDate').val();
		if(descent == ""){
			descent = "9999-12-31";
		}
		var descentYear = (descent.slice(0,4));
		var descentMonth = (descent.slice(5,7));
		var descentDay = (descent.slice(8));
		var descentDate = new Date(descentYear, descentMonth, descentDay);
		if(entryDate.getTime() > descentDate.getTime()){
			$("#post_label3").html("入山日は下山日より前に設定してください&nbsp;").css("color","#ff0000");
			$("#postEntryDate, #postDescentDate").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(entry=="" && descent!="9999-12-31"){
			$("#post_label3").html("入山日を入力してください&nbsp;").css("color","#ff0000");
			$("#postEntryDate, #postDescentDate").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(descent=="9999-12-31"){
			descent = "";
		}
		//weather
		var valLength_weather = $("#postWeather").val().length;
		if(valLength_weather>30){
			$("#post_label5").html("30文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#postWeather").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//course1
		var valLength_course1 = $("#postCourse1").val().length;
		if(valLength_course1>100){
			$("#post_label6").html("100文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#postCourse1").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//course2
		var valLength_course2 = $("#postCourse2").val().length;
		if(valLength_course2>100){
			$("#post_label7").html("100文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#postCourse2").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//course3
		var valLength_course3 = $("#postCourse3").val().length;
		if(valLength_course3>100){
			$("#post_label8").html("100文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#postCourse3").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//time
		var valLength_time = $("#postTime").val().length;
		if(valLength_time>50){
			$("#post_label9").html("50文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#postTime").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//time
		var valLength_gear = $("#postGear").val().length;
		if(valLength_gear>300){
			$("#post_label10").html("300文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#postGear").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//text
		var valLength_text = $("#postText").val().length;
		if(post.postText.value==""){
			$("#post_label11").html("入力してください&nbsp;").css("color","#ff0000");
			$("#postText").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_text>1000){
			$("#post_label11").html("1000文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#postText").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		if(count==1){
			$("#post_errMessage").html("入力内容をご確認ください&nbsp;").css("color","#ff0000");
			return false;
		}else{
			return true;
		}
	});
	
	//contact================================
	//ボタンを押す前
	//name
	$('#contactName').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#contact_count1').html(valLength);
		if(valLength>30){
			$("#contact_label1").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#contactName").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#contact_label1").html("お名前&nbsp;").css("color","#595757");
			$("#contactName").css({borderColor:"",background:""});
		}
	});
	//email
	$('#contactEmail').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#contact_count2').html(valLength);
		if(valLength>255){
			$("#contact_label2").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#contactEmail").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else if(!contact.c_email.value.match(/^[A-Za-z0-9_.-@]*$/)){
			$("#contact_label2").html("正しく入力してください&nbsp;").css("color","#ff0000");
			$("#contactEmail").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#contact_label2").html("メールアドレス&nbsp;").css("color","#595757");
			$("#contactEmail").css({borderColor:"",background:""});
		}
    });
	//kind
	$('#contactKind').bind('keydown keyup keypress change',function(){
		if(contact.c_kind.value!="選択してください"){
			$("#contact_label3").html("お問い合わせの種類&nbsp;").css("color","#595757");
			$("#contactKind").css({borderColor:"",background:""});
		}
	});
	//title
	$('#contactTitle').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#contact_count4').html(valLength);
		if(valLength>50){
			$("#contact_label4").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#contactTitle").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#contact_label4").html("お問い合わせの件名&nbsp;").css("color","#595757");
			$("#contactTitle").css({borderColor:"",background:""});
		}
	});
	//text
	$('#contactText').bind('keydown keyup keypress change',function(){
        var valLength = $(this).val().length;
        $('#contact_count5').html(valLength);
		if(valLength>500){
			$("#contact_label5").html("文字数オーバー&nbsp;").css("color","#ff0000");
			$("#contactText").css({borderColor:"#ff0000",background:"#ffe0e0"});
		}else{
			$("#contact_label5").html("お問い合わせの内容&nbsp;").css("color","#595757");
			$("#contactText").css({borderColor:"",background:""});
		}
	});
	//ボタンを押した時
	$(".contactSubmit").click(function(){
		var count = 0;
		//name
		var valLength_name = $("#contactName").val().length;
		if(contact.c_name.value==""){
			$("#contact_label1").html("入力してください&nbsp;").css("color","#ff0000");
			$("#contactName").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_name>30){
			$("#contact_label1").html("30文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#contactName").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//email
		var valLength_email = $("#contactEmail").val().length;
		if(contact.c_email.value==""){
			$("#contact_label2").html("入力してください&nbsp;").css("color","#ff0000");
			$("#contactEmail").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_email>255){
			$("#contact_label2").html("255文字以内で入力&nbsp;").css("color","#ff0000");
			$("#contactEmail").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(!contact.c_email.value.match(/^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/)){
			$("#contact_label2").html("正しく入力してください&nbsp;").css("color","#ff0000");
			$("#contactEmail").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//mountain
		if(contact.c_kind.value=="select"){
			$("#contact_label3").html("お問い合わせの種類を選択してください&nbsp;").css("color","#ff0000");
			$("#contactKind").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//title
		var valLength_title = $("#contactTitle").val().length;
		if(contact.c_title.value==""){
			$("#contact_label4").html("入力してください&nbsp;").css("color","#ff0000");
			$("#contactTitle").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_title>50){
			$("#contact_label4").html("50文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#contactTitle").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		//title
		var valLength_text = $("#contactText").val().length;
		if(contact.c_text.value==""){
			$("#contact_label5").html("入力してください&nbsp;").css("color","#ff0000");
			$("#contactText").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_text>500){
			$("#contact_label5").html("500文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#contactText").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		if(count==1){
			$("#contact_errMessage").html("入力内容をご確認ください&nbsp;").css("color","#ff0000");
			return false;
		}else{
			return true;
		}
	});
	//myPageSetting================================
	//ボタンを押す前
	//photo
	$('#photo').change(function(e){
		//ファイルオブジェクトを取得する
		var file = e.target.files[0];
		var reader = new FileReader();
		//画像でない場合は処理終了
		if(file.type.match(/jpg|jpeg|png|gif/i) == null){
			$("#setting_label1").html("jpeg、png、gifのみ使用可能です&nbsp;").css("color","#ff0000");
		}else{
			$("#setting_label1").html("アカウント画像&nbsp;").css("color","#595757");
		}
		//アップロードした画像を設定する
		reader.onload = (function(file){
			return function(e){
				$("#preview").attr("src", e.target.result);
				$("#preview").attr("title", file.name);
			};
		})(file);
		reader.readAsDataURL(file);
		var width = $('#photo').width();
	});
	$('#settingName').bind('keydown keyup keypress change',function(){
		var valLength_name = $("#settingName").val().length;
		if(!(settingPost.name.value=="") && valLength_name<=20){
			$("#setting_label2").html("ユーザー名&nbsp;").css("color","#595757");
			$("#settingName").css({borderColor:"",background:""});
		}
	});
	//ボタンを押した時
	//userName
	$(".settingSubmit").click(function(){
		var count = 0;
		var valLength_name = $("#settingName").val().length;
		if(settingPost.name.value==""){
			$("#setting_label2").html("ユーザー名を入力してください&nbsp;").css("color","#ff0000");
			$("#settingName").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}else if(valLength_name>20){
			$("#setting_label2").html("20文字以内で入力してください&nbsp;").css("color","#ff0000");
			$("#settingName").css({borderColor:"#ff0000",background:"#ffe0e0"});
			count = 1;
		}
		if(count==1){
			return false;
		}else{
			return true;
		}
	});
});
