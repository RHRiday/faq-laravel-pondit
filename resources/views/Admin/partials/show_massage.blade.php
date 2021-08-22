<x-notifier action="save" message="saved"/>
<x-notifier action="update" message="updated"/>
<x-notifier action="publish" message="published"/>
<x-notifier action="unPublish" message="unpublished"/>
<x-notifier action="delete" message="deleted"/>

@if(Session::get('error'))
    <script>
        alertify.set('notifier','position', 'top-center');
        alertify.error('FAQ was not saved, This priority already exist!!');
    </script>
@endif

