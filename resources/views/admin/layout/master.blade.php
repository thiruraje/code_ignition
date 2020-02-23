
<!DOCTYPE html>
<html>
    <div class="wrapper">
        	<!-- Nav Bar -->
			@includeIf('admin.layout.nav')
            <!-- header -->
			@includeIf('admin.layout.header')
            <!-- Content -->
                <main id="js-page-content" role="main" class="page-content">
                        
                        @include('errors')
                        @yield('content')
                </main>
            <!-- End Content -->
            <!-- Footer -->
			@include('admin.layout.footer')
        <!-- End Footer -->
        </div>

    </body>
</html>