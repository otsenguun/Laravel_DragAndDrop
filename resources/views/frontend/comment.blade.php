 <li>
          <article class="comment clearfix">
            <div class="comment-inner">
              <header class="comment-header">
                <cite class="comment-author">{{$comment->name}}</cite>
                <time datetime="2012-10-27" class="comment-datetime">{{$comment->created_at}}</time>
              </header>
              <div class="comment-body">
                <p>{{$comment->content}}</p>
              </div>
            </div>
          </article>
</li>