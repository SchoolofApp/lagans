<?php get_header(); ?> 


<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="nepal">Nepal</option>
      <option value="bharat">Bharat</option>
      <option value="pakishtan">Pakishtan</option>
      <option value="Bangladesh">Bangladesh</option>
      <option value="Belize">Belize</option>
      <option value="China">China</option>
      <option value="France">France</option>
      <option value="Netherlands">Netherlands</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>




<?php get_footer(); ?> 
