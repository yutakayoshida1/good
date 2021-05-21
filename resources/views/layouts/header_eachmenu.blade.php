@if($row[0] == "ログイン")

<div class="col-md-{{$row[2]}} menu active pad_vertical2 textcenter">
	<a href="{{$row[1]}}" class="login-button" href="{{$row[1]}}">
		<span class="login-button-text">
			{{$row[0]}}
		</span>
	</a>	
</div>

@elseif($row[0] == "ログアウト")


<div class="col-md-{{$row[2]}} menu active pad_vertical2 textcenter">
	<a href="{{$row[1]}}" class="logout-button" href="{{$row[1]}}">
		<span class="logout-button-text">
			{{$row[0]}}
		</span>
	</a>
</div>

@else

<div class="col-md-{{$row[2]}} menu active pad_vertical2">
	<a href="{{$row[1]}}">
		{{$row[0]}}
	</a>
</div>

@endif