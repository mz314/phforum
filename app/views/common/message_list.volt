<div class="topic-list">
    {% for m in messages %}
        <div class="topic-item">
            
            <div class="title">
                {{m.title}}
            </div>
            {#<div class="info">
            </div>#}
            
            <div class="content">
                {{m.text}}
            </div>
            
            <div>
                <a href="#">Go to thread</a>
            </div>
        </div>
        {% endfor %}
</div>

