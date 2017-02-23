    <!-- Start Pagination -->
    @if ($books->hasPages())
        {!! Html::style(app('css').'/Footer.css') !!}
        {{$books->links()}}
    @endif
    <!-- End Pagination -->
  </body>
</html>