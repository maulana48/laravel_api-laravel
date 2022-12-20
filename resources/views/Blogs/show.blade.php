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

    <!-- Post Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="" id="foto-post">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <div class="flex justify-between">
                    <a href="" id="category-post" class="text-blue-700 text-sm font-bold uppercase pb-4"></a>
                    <div class="flex gap-2">
                        <a href="" id="edit"
                            class="btn bg-yellow-700 hover:bg-yellow-500 py-2 px-5 text-white rounded-xl">Edit Post</a>
                        <form action="" method="post" id="delete">
                            @csrf
                            <button type="submit"
                                class="btn bg-red-700 hover:bg-red-500 py-2 px-5 text-white rounded-xl">
                                <a class="">Delete Post</a>
                            </button>
                        </form>
                    </div>
                </div>
                <a href="" id="title-post" class="text-3xl font-bold hover:text-gray-700 pb-4"></a>
                <p href="" id="userT-post" class="text-sm pb-8">
                </p>
                <h1 class="text-2xl font-bold pb-3">Content</h1>
                <p id="body-post" class="pb-3"></p>
            </div>
        </article>

        <div id="nav-post" class="w-full flex pt-6">
            
        </div>

        <div class="w-full flex flex-col gap-2 text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
            <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1"
                    class="rounded-full shadow h-32 w-32">
            </div>
            <div class="flex-1 flex flex-col justify-center md:justify-start">
                <p id="user-info" class="font-semibold text-2xl"></p>
                <p id="user-info1" lass="pt-2"></p>
                <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                    <a class="" href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
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

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">Instagram</p>
            <div class="grid grid-cols-3 gap-3">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
            </div>
            <a href="#"
                class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
            </a>
        </div>

    </aside>

</div>

<footer class="w-full border-t bg-white pb-12">
    <div class="mx-auto pt-10">
        <div class="text-center">
            <h1 class="font-bold text-2xl">New Updates</h1>
        </div>
        <div id="latest" class="flex justify-center flex-col md:flex-row gap-10 md:gap-5 pt-10 px-10">
            {{-- @foreach ($latest as $l) --}}

            {{-- @endforeach --}}
        </div>
    </div>
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
            url: "http://127.0.0.1:8000/api/blog/show/{{ $post->id }}",
            method: '',
            dataType: '',
            success: response => {
                let dataPost = response.post;
                let pvPost = response.PVpost;
                let nxPost = response.NXpost;
                let latest = response.latest;

                $('#edit').attr({href: `/Blog/edit/${dataPost.id}`}); 
                $('#delete').attr({action: `/api/blog/${dataPost.id}`}); 

                $('#title-post').prepend(dataPost.title);
                $('#foto-post').attr({src: `${dataPost.image ? '/' + dataPost.image : "https://source.unsplash.com/collection/1346951/1000x500?sig=1"}`}); 
                $('#category-post').text(dataPost.category.name);
                $('#category-post').attr({href: `/Blog/categories/${dataPost.category.slug}`}); 
                $('#userT-post').html(`By <a href="/Blog/authors/${dataPost.user.id}" class="font-semibold hover:text-gray-800">${dataPost.user.name}</a>, Published on ${dataPost.created_at}`);

                $('#body-post').html(dataPost.body);
                $('#nav-post').append(pvPost ? `<a href="/Blog/show/${pvPost.id}" id="pvhref" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                            <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i>
                                Previous</p>
                            <p class="pt-2">${pvPost.title}</p>
                        </a>` : '');
                $('#nav-post').append(nxPost ? `<a href="/Blog/show/${nxPost.id}" id="nxhref" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                            <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i
                                    class="fas fa-arrow-right pl-1"></i></p>
                            <p class="pt-2">${nxPost.title}</p>
                        </a>` : '');

                $('#user-info').text(dataPost.user.name);
                $('#user-info1').text(dataPost.user.email);


                let htmlString = '';
                for(let l of latest){
                    htmlString += `<div
                        class=" overflow-hidden shadow-lg transition duration-500 ease-in-out transform hover:shadow-2xl rounded-lg md:w-80">
                        <img alt="blog photo" src="${l.image ? '/' + l.image : "https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"}" class="max-h-40 w-full object-cover" />
                        <div class="bg-white w-full p-4">
                            <a href="/Blog/show/${l.id}" class="text-blue-600 text-2xl font-medium">${l.title}</a>
                            <p class="text-gray-600 font-light text-md">
                                ${l.excerpt}
                                <a class="inline-flex text-blue-600" href="/Blog/show/${l.id}">Read More</a>
                            </p>
                            <div
                                class=" flex flex-wrap justify-starts items-center py-3 border-b-2 text-xs text-white font-medium">
                                <a href="#" class="m-1 px-2 py-1 rounded bg-blue-500"> ${l.category.name} </a>
                            </div>
                            <div class="flex items-center mt-2">
                                <img class="w-10 h-10 object-cover rounded-full" alt="User avatar"
                                    src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200" />
                                <div class="pl-2">
                                    <div class="font-medium">${l.user.name}</div>
                                    <div class="text-gray-600 text-xs">${l.user.username}</div>
                                </div>
                            </div>
                        </div>
                    </div>`
                }
                let html = $.parseHTML(htmlString)
                $('#latest').html(html)
            }
        });

        $('#delete').submit(function(event){
            event.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            
            form = new FormData(this);
            $.ajax({
                url: url,
                method: "POST",
                data: form,
                processData: false,
                contentType: false,
                success: _ => {
                    console.log('SUCCESS');
                    window.location.href = "http://127.0.0.1:8000/Blog";
                },
                error: err => {
                    console.log('ERROR');
                    console.log(err);
                }
            });
        });
</script>

@endsection