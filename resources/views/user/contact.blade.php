<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
</head>
<body>
@if ($errors->any())
          <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red" >{{ $error }}</li>
            @endforeach
        </ul>
  @endif

<form action="{{route('contact.create')}}" method="post" >
        @csrf
      <label for="name">Full Name</label>
        <input type="text" name="name" placeholder="Enter Your Full Name"><br>
           <label for="Email">Email</label>
        <input type="text" name="email" placeholder="Enter Your Email"><br>
           <label for="mobile">Mobile</label>
        <input type="text" name="mobile" placeholder="Enter Your Mobile Number"><br>
      <label for="subject">Subject</label>
        <input type="text" name="subject" placeholder="Enter Your subject"><br>
      <label for="message">Message</label>
      <textarea id="message" name="message" rows="4" cols="50"></textarea>
      <button type="submit"> Submit</button>
    </form>
</body>
</html>