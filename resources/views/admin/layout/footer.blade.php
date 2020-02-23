                    <footer class="page-footer" role="contentinfo">
                        <div class="d-flex align-items-center flex-1 text-muted">
                            <span class="hidden-md-down fw-700">2020 © SmartAdmin by&nbsp;<a href='' class='text-primary fw-500' title='gotbootstrap.com' target='_blank'>Thiru Vicky</a></span>
                        </div>
                       
                    </footer>
                </div>

            </div>
        </div>
        <script src="{{url('js/vendors.bundle.js')}}"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/keytable/2.5.1/js/dataTables.keyTable.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>

        <script src="{{url('js/app.bundle.js')}}"></script>
    
    </body>
    @yield('script')
    @include('errors')
</html>
