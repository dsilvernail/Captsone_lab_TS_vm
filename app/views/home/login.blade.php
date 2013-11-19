@extends('master')

@section('content')
	
 <script type="text/javascript">
    function validateForm()
    {
    var a=document.forms["reg"]["first_name"].value;
    var b=document.forms["reg"]["last_name"].value;
    var c=document.forms["reg"]["address"].value;
    var d=document.forms["reg"]["state"].value;
    var e=document.forms["reg"]["city"].value;
    var f=document.forms["reg"]["zip"].value;
    var g=document.forms["reg"]["email"].value;
    var h=document.forms["reg"]["phone"].value;
    var i=document.forms["reg"]["education"].value;
    var j=document.forms["reg"]["status"].value;
    var k=document.forms["reg"]["username"].value;
    var l=document.forms["reg"]["password"].value;

    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (h==null || h=="") && (i==null || i=="") && (j==null || j=="") && (k==null || k=="") && (l==null || l==""))
    {
    alert("All Field must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("First name must be filled out");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Last name must be filled out");
    return false;
    }
    if (c==null || c=="")
    {
    alert("Address name must be filled out");
    return false;
    }
    if (d==null || d=="")
    {
    alert("State must be filled out");
    return false;
    }
    if (e==null || e=="")
    {
    alert("City must be filled out");
    return false;
    }
    if (f==null || f=="")
    {
    alert("Zip must be filled out");
    return false;
    }
    if (g==null || g=="")
    {
    alert("Email  must be filled out");
    return false;
    }
    if (h==null || h=="")
    {
    alert("Phone must be filled out");
    return false;
    }
    if (i==null || i=="")
    {
    alert("Education must be filled out");
    return false;
    }
    // if (j==null || j=="")
  	//{
    //alert("Status must be filled out");
    //return false;
   // }
    if (k==null || k=="")
    {
    alert("Username must be filled out");
    return false;
    }
    if (l==null || l=="")
    {
    alert("Password must be filled out");
    return false;
    }
    }
    </script>


   <form name="reg" action="config.testing.database.php" onsubmit="return validateForm()" method="input"> -->
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
    <td colspan="2">
    <div align="center">


    <h1> Sign up for Tutor Scout</h1> 
               
                <p> 
                    <label for="first_name" class="first_name" data-icon="first_name">First Name</label>
                    <input id="first_name" name="first_name" required="required" type="text" placeholder="your first name" />
                </p>
                <p> 
                    <label for="last_name" class="last_name" data-icon="last_name">Last Name</label>
                    <input id="last_name" name="last_name" required="required" type="text" placeholder="your last name" />
                </p>
                <p> 
                    <label for="address" class="address" data-icon="address">Address</label>
                    <input id="address" name="address" required="required" type="text" placeholder="your address" />
                </p>
                <p> 
                    <label for="city" class="city" data-icon="city">City</label>
                    <input id="city" name="city" required="required" type="text" placeholder="city" />
                </p>
                <p> 
                    <label for="state" class="state" data-icon="state">State</label>
                    <input id="state" name="state" required="required" type="text" placeholder="Ex. VA" />
                </p>
                <p> 
                    <label for="zip" class="zip" data-icon="zip">Zip Code</label>
                    <input id="zip" name="zip" required="required" type="text" placeholder="ex. 20120" />
                </p>

                <p>
                    <label for="email" class="email" data-icon="email" > Your email</label>
                    <input id="email" name="email" required="required" type="email" placeholder="student@jmu.edu" /> 
                </p>
                <p>
                    <label for="phone" class="phone" data-icon="phone" > Your Phone Number</label>
                    <input id="phone" name="phone" required="required" type="phone" placeholder="7033892377" /> 
                </p>
                <p> 
                    <label for="education" class="education" data-icon="education">Education</label>
                    <input id="education" name="education" required="required" type="text" placeholder="your current education" />
                </p>
            
                 <input type="radio" name ="status" value="student"> Student
                  <input type="radio" name ="status" value="parent of student "> Parent of Student
                   <input type="radio" name ="status" value="tutor"> Tutor
                   
                <p> 
                    <label for="username" class="username" data-icon="username">Your username </label>
                    <input id="username" name="username" required="required" type="username" placeholder="eg.ayersjc"/>
                </p>
                <p> 
                    <label for="password" class="password" data-icon="password">Please confirm your password </label>
                    <input id="password" name="password" required="required" type="password" placeholder="eg. dd"/>
                </p>
                <!-- <p class="signin button"> 
                    <input type="submit" value="Sign up"/> 
                </p>-->
                <p class="change_link">  
                    Already a Member ?
                    <a href="#tologin" class="to_register"> Go and Log In </a>
                </p>
                
            </form>
        </div>
         
    </div>
</div> 
    <td><input name="submit" type="submit" value="Submit" /></td>
    </tr>
    </table>
    </form>

@stop
