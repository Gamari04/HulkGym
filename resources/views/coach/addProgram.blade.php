<!DOCTYPE html>
<html lang="zxx">
@include('Home.layouts.header')

<body>
  
    <!-- Header End -->
@include('Home.layouts.nav')<br><br><br><br>
    <!-- Header End -->

    <main class="pt-5">
        <form action="{{ route('training_programs.store') }}" method="post" enctype="multipart/form-data"
            style="width: 100%; max-width: 60rem; " class="mx-auto ">
            @csrf
            <h1 class="text-center pb-5 display-4 fs-3 fw-bold fst-italic text-primary">
                Add New Program
            </h1>
            <div div class="mb-3">
                <input type="hidden" name="coach_id" value="{{ Auth::user()->id }}">
            </div>
            <div class="mb-3">
                <label class="form-label text-primary">Program Title :</label>
                <input type="text" class="form-control " placeholder="Enter a title" name="title"
                    style="border: 2px solid rgb(34, 139, 34);">
            </div>

            <div class="mb-3 ">
                <label for="content" class="form-label text-primary">Description :</label>
                <textarea id="editor" name="description">
                   
                    
                </textarea>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-primary">Select a Category :</label>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example"
                    style="border: 2px solid rgb(34, 139, 34);" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3">
                <label for="formFile" class="form-label text-primary">Choose a Pic</label>
                <input class="form-control bg-dark" type="file" id="formFile"
                    style="border: 2px solid rgb(34, 139, 34);" name='image'>
            </div>

            <div class="modal-footer">

                <button type="submit" class="primary-btn rounded" name="addwiki">Add Program</button>
            </div>
        </form>

    </main>
    <!-- Js Plugins -->
   @include('Home.layouts.footer')