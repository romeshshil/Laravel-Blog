<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('admin.layout.partials.htmlheader')
@show



<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.layout.partials.mainheader')

    @include('admin.layout.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('admin.layout.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    @include('admin.layout.partials.footer')

</div><!-- ./wrapper -->

@section('scripts')
    @include('admin.layout.partials.script')
@show

</body>
</html>
