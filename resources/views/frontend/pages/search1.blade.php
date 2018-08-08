@foreach($conversations as $conversation)
  <article class="post post-5 clearfix">
    <div class="entry-media"><a href="{{url('/showconversation',$conversation->id)}}" class="prettyPhoto"><img src="/uploads/Conimage/{{$conversation->image}}" alt="Foto" class="img-responsive"/></a></div>
    <div class="entry-main">
      <div class="entry-header"><span class="category color-4">{{$conversation->type}}</span>
        <h2 class="entry-title"><a href="{{url('/showconversation',$conversation->id)}}">{{$conversation->title}}</a></h2>
      </div>
      <div class="entry-meta"><span class="entry-meta__item"><a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link"> {{$conversation->poster->name}}</a></span><span class="entry-meta__item"><a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link">->{{$conversation->created_at->format('d.m.Y')}}</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link">{{$conversation->imagestyle}}</a></span></div>
      <div class="entry-footer"><a href="{{url('/showconversation',$conversation->id)}}" class="btn-link">Цааш унших</a></div>
    </div>
  </article>    
@endforeach   
<div style="text-align: center;">{{ $conversations->links() }}</div>