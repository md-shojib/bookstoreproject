<form action="/update" method="POST">
        @csrf
        <br></br>
            <input type="text" name="id" value="{{$book['id']}}" placeholder="Enter a isbn">
            <br></br>
            <input type="text" name="isbn" value="{{$book['isbn']}}" placeholder="Enter a title">
            <br></br>
            <input type="text" name="title" value="{{$book['title']}}" placeholder="Enter a title">
            <br></br>
            <input type="text" name="author" value="{{$book['author']}}" placeholder="Enter a author">
            <br></br>
            <input type="text" name="stock" value="{{$book['stock']}}" placeholder="Enter stock">
            <br></br>
            <input type="text" name="price" value="{{$book['price']}}" placeholder="Enter price">
            <br></br>
            <button type="submit" class="btn btn-secondary">Update</button>
        </form>