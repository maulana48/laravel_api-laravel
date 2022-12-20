@extends('components.parent')
@section('content')

<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-blue-800 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

        <nav>
            <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                <li><a class="hover:text-gray-200 hover:underline px-4" href="{{ route('blog.index') }}">Home</a></li>
                <li><a class="hover:text-gray-200 hover:underline px-4" href="{{ route('blog.create') }}">Create</a>
                </li>
            </ul>
        </nav>

        <div class="flex items-center text-lg no-underline text-white pr-6">
            <a class="" href="#">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>

</nav>

<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
            Minimal Blog
        </a>
        <p class="text-lg text-gray-600">
            Lorem Ipsum Dolor Sit Amet
        </p>
    </div>
</header>

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section id="posts" class="w-full md:w-2/3 flex flex-col items-center px-3">

        {{-- @foreach ($posts as $post)
        @endforeach --}}

        <!-- Pagination -->
        <div class="flex items-center py-8">
            {{ $posts->links() }}
        </div>

    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">About Us</p>
            <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio
                sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
            <a href="#"
                class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                Get to know us
            </a>
        </div>
    </aside>

</div>

<footer class="w-full border-t bg-white pb-12">

    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="#" class="uppercase px-3">About Us</a>
            <a href="#" class="uppercase px-3">Privacy Policy</a>
            <a href="#" class="uppercase px-3">Terms & Conditions</a>
            <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6">&copy; myblog.com</div>
    </div>
</footer>

<script>
    $.ajax({
        url: `http://127.0.0.1:8000/api/blog/`,
        method: '',
        dataType: '',
        success: response => {
            let posts = response.data.data;
            let htmlString = '';
            console.log(response.data.current_page);
            for(let post of posts){
                htmlString += `<article class="flex flex-col shadow my-4">
                    <!-- Article Image -->
                    <a href="${post.image}" class="hover:opacity-75">
                        <img src="${ post.image ? "/" + post.image :  "https://source.unsplash.com/collection/1346951/1000x500?sig=1"}">
                    </a>
                    <div class="bg-white flex flex-col justify-start p-6">
                        <a href="/Blog/categories/${post.category.slug}" class="text-blue-700 text-sm font-bold uppercase pb-4">${post.category.name}</a>
                        <a href="/Blog/show/${post.id}" class="text-3xl font-bold hover:text-gray-700 pb-4">${post.title}</a>
                        <p href="#" class="text-sm pb-3">
                            By <a href="/Blog/authors/${post.user.id}" class="font-semibold hover:text-gray-800">${post.user.name}</a>, Published on ${new Date(post.created_at)}
                        </p>
                        <a href="#" class="pb-6">${post.excerpt}...</a>
                        <a href="/Blog/show/${post.id}" class="uppercase text-gray-800 hover:text-black">Continue
                            Reading <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>`
            }
            let html = $.parseHTML(htmlString)
            $('#posts').prepend(html)
        }
    });
        
</script>

@endsection