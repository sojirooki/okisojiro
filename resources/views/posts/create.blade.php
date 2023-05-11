<x-app-layout>
    <x-slot name="header">
        Header
    </x-slot>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder="タイトル" value={{ old('post.title' )}}>
                <p class='title__error' style="color:red">{{ $errors->first('post.title') }} </p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
                <input type="submit" value="store">
        </form>
            <div class='footer'>
                <a href="/">戻る</a>
    </body>
</x-app-layout>