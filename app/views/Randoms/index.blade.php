@extends('layouts.default')
@section('content')
    {{ Form::open(array('role'=>'form')) }}
      {{ Form::hidden('id',($id),array('class'=>'form-control','id'=>'id')) }}
    {{ Form::button('PICK', array('class' => 'btn btn-success','id'=>'go')) }}
    


<div class="form-group">
        
            {{ Form::label('Name', 'Name') }}
            {{ Form::text('name', '',array('class'=>'form-control','id'=>'name')) }}
        
    </div>

 <div class="form-group">
        
            {{ Form::label('wish_1', 'Wish 1') }}
            {{ Form::text('wish_1', '',array('class'=>'form-control','id'=>'wish1')) }}
        
    </div>

    <div class="form-group">
        
            {{ Form::label('wish_2', 'Wish 2') }}
            {{ Form::text('wish_2', '',array('class'=>'form-control','id'=>'wish2')) }}
        
    </div>
    <div class="form-group">
        
            {{ Form::label('wish_3', 'Wish 3') }}
            {{ Form::text('wish_3', '',array('class'=>'form-control','id'=>'wish3')) }}
        
    </div>

      {{ Form::label('aa', 'Paki close na lang,.hahahahhaha,.thanks..',array('id'=>'close')) }}


<script type="application/javascript">
$(document).ready(function(){ 
	$('#close').hide();
	var id=$("#id").val();
	console.log(id);
	$('#go').on('click',function(e){
		$.ajax({
	    type: "POST",
	    url: '{{action("randoms.store")}}',
	    data:  {'id':id},
	    dataType: 'json',
	    success:(function(data) {
	    	$('#go').hide();
		    $("#name").val(data[0][0]['username']);
		    $("#wish1").val(data[0][0]['wish_1']);
		    $("#wish2").val(data[0][0]['wish_2']);
		    $("#wish3").val(data[0][0]['wish_3']);
$('#close').show();
		})
		})
	});
});

</script>

@stop