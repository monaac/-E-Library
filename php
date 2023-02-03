<!DOCTYPE html>
<html>
  <head>
    <title>My E-Library</title>
    <style>
      /* Add CSS styles here */
      body {
        font-family: Arial, sans-serif;
      }

      h1 {
        text-align: center;
        margin-top: 50px;
      }

      .book-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 50px;
      }

      .book {
        width: 200px;
        height: 300px;
        margin: 20px;
        border: 1px solid lightgray;
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
        cursor: pointer;
      }

      .book img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }

      .book h3 {
        margin-top: 20px;
        font-size: 18px;
      }
    </style>
  </head>
  <body>
    <h1>My E-Library</h1>

    <div class="book-list">
      <div class="book">
        <img src="https://via.placeholder.com/200x200" alt="Book cover" />
        <h3>Book Title</h3>
      </div>
      <div class="book">
        <img src="https://via.placeholder.com/200x200" alt="Book cover" />
        <h3>Book Title</h3>
      </div>
      <div class="book">
        <img src="https://via.placeholder.com/200x200" alt="Book cover" />
        <h3>Book Title</h3>
      </div>
    </div>

    <script>
      // Add JavaScript code here
      const books = document.querySelectorAll('.book');

      books.forEach(book => {
        book.addEventListener('click', function() {
          alert('You selected a book!');
        });
      });
    </script>
  </body>
</html>
