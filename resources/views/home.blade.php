<!DOCTYPE html>
<html lang="zh-tw">
  @include('head')
  <body>

    <x-header/>
    <x-intro/>

    <main id="main">

      {{-- <x-featured-services/> --}}
      <x-about/>
      <x-services/>
      <x-portfolio/>
      {{-- <x-clients/> --}}
      <x-team/>
      <x-contact/>

    </main>

      <x-footer/>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  </body>

</html>
