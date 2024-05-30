<html xmlns="http://www.w3.org/1999/xhtml"><head>
<script type="text/javascript">
 function closethisasap() {
 document.forms["redirectpost"].submit();
  }
</script>
<style>
.head{
    font-size: 30px;
    color: rgba(255, 0, 0, 0.742);
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    text-align: center;
    border: 1px solid grey;
    border-radius: 5px;
    align-items: center;
}
</style>
</head>

<body onload="closethisasap();">
<h1 class="head">Please wait you will be redirected soon to <br >Jazzcash Payment Page</h1>
 <form name="redirectpost" method="POST" action="{{Config::get('constants.jazzcash.TRANSACTION_POST_URL')}}">
	 <?php
	 $post_data = Session::get('post_data');
	 //echo '<pre>';
	 //print_r($post_data);
	 //echo '</pre>';
	 ?>
 @foreach($post_data as $key => $value)
	<input type="hidden" name="{{ $key }}" value="{{ $value }}">
 @endforeach

 </form>
 </body>
 </html>
