@foreach($conversations as $conversation)

<article class="white-panel"> 
          @if($conversation->jstyle==0)
          <a href="{{url('/showconversation',$conversation->id)}}"> <img src="/uploads/Conimage/{{$conversation->image}}" alt="" class="article_image"></a> 
          @else
          <a href="{{url('/showconversation',$conversation->id)}}"> <img src="/uploads/Conimage/{{$conversation->image}}" alt="" class="article_image1"></a> 
          @endif
      <span class="label bg-22">{{$conversation->type}}</span>
          
      <div class="entry-main">
        <div class="entry-header">
          <a href="{{url('/showconversation',$conversation->id)}}">
            <h2 class="entry-title1 text-uppercase1">
          <!--  <p class="name_001"> <i>О.Баасанхүү: </i> </p>  --><p class="text_001"> {!! \Illuminate\Support\Str::limit ($conversation->title, 51,'....')  !!}</p> 
            </h2>
          </a>
        </div>  
        <div class="entry-meta1">
          <span class="entry-meta__item1">by&nbsp;&nbsp;
            <a href="{{url('showuser',$conversation->poster->id)}}" class="entry-meta__link1">{{$conversation->poster->name}}</a>
          </span>
          <span class="entry-meta__item1">
            <a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link1">{{$conversation->created_at->format('d.m.Y')}}</a>
          </span>
          <span class="entry-meta__item1"><i class="fa fa-eye" aria-hidden="true"></i> &nbsp;
            <a href="{{url('/showconversation',$conversation->id)}}" class="entry-meta__link1">{{$conversation->readed}}</a>
          </span>
        </div>

      </div>
  </article>

  @endforeach