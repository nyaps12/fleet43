

@if (Session::has('success'))
      <script>
          toastr.options = {
              "progressBar": true,
              "closeButton": true,
          }

          toastr.success("{{ Session::get('success') }}", 'Success!', {
              timeout: 12000
          });

      </script>
  @endif

  @if (Session::has('error'))
      <script>
          toastr.options = {
              "progressBar": true,
              "closeButton": true,
          }
          toastr.error("{{ Session::get('error') }}", 'Failed!', {
              timeout: 12000
          });
      </script>
  @endif
