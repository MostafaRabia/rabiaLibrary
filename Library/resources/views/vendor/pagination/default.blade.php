@if ($paginator->hasPages())
    <script>
        $(document).ready(function(){
            $('.pagination-Div').materializePagination({
                lastPage: {{$paginator->lastPage()}},
                firstPage:  1,
            });
        });
    </script>
    <div class="pagination-Div"></div>
@endif
