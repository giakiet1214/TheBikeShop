@extends('userViews.layout.app')

@section('title','Contact')

@section('content')
<div class="contact">
	<div class="container">
		<h3>CONTACT US</h3>
		<p>Please contact us for all inquiries and purchase options.</p>
		<form>
			 <input type="text" placeholder="NAME" required="">
			 <input type="text" placeholder="SURNAME" required="">			 
			 <input class="user" type="text" placeholder="USER@DOMAIN.COM" required=""><br>
			 <textarea placeholder="MESSAGE"></textarea>
			 <input type="submit" value="SEND">
		</form>
	</div>
</div>
@endsection
<!--giao diện ổn 
cần cải thiện kiểm tra tính hợp hệ ở ô name và surname không được điền số.
cần cải thiện thêm tính năng không được bỏ trống ở ô tin nhắn.
cần cải thiện ở ô email : không hợp lệ khi không có dấu @. 
sửa nếu có thể
(15/10/2025 trongphuc)
-->