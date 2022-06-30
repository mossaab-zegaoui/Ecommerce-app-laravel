@extends('layouts.app')

@section('content')


<h2>Blog page</h2>

<script>
    document.getElementById('link3').classList.add('active');
    const link = document.querySelectorAll("#link1, #link2, #link4, #link5, #link6");
    for (var i = 0; i < link.length; i++) {
        link[i].classList.remove('active');
    }
</script>
</script>
@endsection