<x-userlayout>

    <div class="creat-post-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="verse_post">
                        <h3>Verse Post</h3>
                        <form action="{{route('vs_post')}}" method="POST">
                            @csrf
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form4Example1" class="form-control" name="title" />
                                <label class="form-label" for="form4Example1">Titel</label>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="customFile">Photo</label>
                                <input type="file" class="form-control" id="customFile" name="image"/>
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="form4Example3" rows="4" name="content"></textarea>
                                <label class="form-label" for="form4Example3">content</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Add Post</button>
                        </form> 
                    </div>
                
                </div>
            </div>
        </div>
    </div>

</x-userlayout>