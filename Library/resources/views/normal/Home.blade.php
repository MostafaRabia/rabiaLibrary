@extends(app('normal').'.Index')
@section('center')
{!! Html::style(app('css').'/Home.css') !!}
<!-- Start Books -->
<section class="books-Section">
	<div class='container'>
		<!-- For Large -->
		<div class="row hide-on-med-only">
			@php $i = 0 @endphp
			@foreach ($books as $book)
			<div class='col l4 s12'>
				<div class="book-Item-Div">
					<div class="card sticky-action">
						<div class="card-image waves-effect waves-block waves-light">
							<a href="{{url('book/'.$book->id)}}"><img src="{{$book->imageOfBook}}" alt="{{$book->imageOfBook}}"></a>
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">{{$book->Name}}<i class="material-icons left">more_vert</i></span>
							<p><a href="{{$book->Authors->id}}">{{$book->Authors->Name}}</a></p>
						</div>
						<div class="card-action">
							<a href='{{$book->pathOfBook}}'><i class="material-icons">file_download</i></a>
							<a href='{{$book->readBook}}'><i class="material-icons">import_contacts</i></a>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">{{$book->Name}}<i class="material-icons left">close</i></span>
							<p>{{$book->informationAboutBook}}</p>
						</div>
						<div class='watches-Likes-Dislikes-Div card-action'>
							<div class="watches-Div">
								<div class="watches-Icon-Div">
									<i class="material-icons">remove_red_eye</i>
									<p>{{$book->Readed}}</p>
								</div>
							</div>
							<div class="likes-Div">
								<i class="material-icons">thumb_up</i>
								<p>{{$book->Likes}}</p>
							</div>
							<div class="dislikes-Div">
								<i class="material-icons">thumb_down</i>
								<p>{{$book->Dislikes}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@php $i++ @endphp
			@if ($i%3==0)
				<div style="clear:both;"></div>
			@endif
			@endforeach
		</div>
		<!-- For Tablets -->
		<div class="row hide-on-small-only hide-on-large-only">
			<div class='hide'>{{$i=0}}</div>
			@foreach ($books as $book)
			<div class='col m6'>
				<div class="book-Item-Div">
					<div class="card sticky-action">
						<div class="card-image waves-effect waves-block waves-light">
							<img src="{{$book->imageOfBook}}">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">{{$book->Name}}<i class="material-icons left">more_vert</i></span>
							<p><a href="#">{{$book->nameOfAuthor}}</a></p>
						</div>
						<div class="card-action">
							<a href='#'><i class="material-icons">file_download</i></a>
							<a href='#'><i class="material-icons">import_contacts</i></a>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">{{$book->Name}}<i class="material-icons left">close</i></span>
							<p>{{$book->informationAboutBook}}</p>
						</div>
						<div class='watches-Likes-Dislikes-Div card-action'>
							<div class="watches-Div">
								<div class="watches-Icon-Div">
									<i class="material-icons">remove_red_eye</i>
									<p>500,000</p>
								</div>
							</div>
							<div class="likes-Div">
								<i class="material-icons">thumb_up</i>
								<p>500,000</p>
							</div>
							<div class="dislikes-Div">
								<i class="material-icons">thumb_down</i>
								<p>500,000</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='hide'>{{$i++}}</div>
			@if ($i%6==0)
				<div style="clear:both;"></div>
			@endif
			@endforeach
		</div>
	</div>
</section>
<!-- End Books -->
{!! Html::script(app('js').'/materialize-pagination.min.js') !!}
@stop