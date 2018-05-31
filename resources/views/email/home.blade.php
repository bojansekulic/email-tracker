<p>Email Forms</p>



{!! Form::open(['method'=>'POST', 'route'=>'sendmail','files'=>true]) !!}



<div class="form-group">
    {!! Form::label('mail_subject_label','Subject:') !!}
    {!! Form::text('subject',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('mail_from_label','From Name:') !!}
{!! Form::text('mail_from',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
{!! Form::label('mail_from_address_label','From email address:') !!}
{!! Form::text('mail_from_address',null,['class'=>'form-control']) !!}
</div>


{{--<div class="form-group">--}}
    {{--{!! Form::label('to_label','To:') !!}--}}
    {{--{!! Form::text('sending_to',null,['class'=>'form-control']) !!}--}}
{{--</div>--}}





<div class="form-group">

{!! Form::label('text_body','Body:') !!}
{!! Form::textarea('text_body',null,['id' => 'text_body','class'=>'form-control']) !!}

</div>


<div class="form-group">
    {!! Form::submit('SEND', ['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js ')}}"></script>
<script>
    CKEDITOR.replace( 'text_body' );
</script>