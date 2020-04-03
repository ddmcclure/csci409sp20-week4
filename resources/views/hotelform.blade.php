<form action="/hotels/store" method="post">
    @csrf
    Name<input type="text" id="name" name="name"><br>
    Address 1<input type="text" id="address_1" name="address_1"><br>
    Address 2<input type="text" id="address_2" name="address_2"><br>
    City<input type="text" id="city" name="city"><br>
    State<input type="text" id="state" name="state"><br>
    Zip<input type="text" id="zip" name="zip"><br>
    Description<input type="text" id="description" name="description"><br>
    Image<input type="text" id="image" name="image"><br>
    <input type="submit" value="Submit">
</form>