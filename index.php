<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police Database System</title>
    <link rel="stylesheet" type="text/css" href="aman.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css"
     integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Lalpur',     11],
          ['Ratu Road',      8],
          ['Hatia',  2],
          ['Main Road', 5],
          ['Namkum',    7]
        ]);

        var options = {
          title: 'Crime ratio in ranchi'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <style>
       body{
        background-image:url('home page bg.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
       }


    </style>
    
</head>
<body>
    <nav class="title_box">
        <label class="logo">Police Database</label>
          
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="">Helpline</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav> 
    
    <div class="container">
        <div class="row">
             <div>
                <h1 class="text-center"><strong> Welcome to the Police Database</strong></h1>
                
                <p class="text-center"><h3> Welcome to our website, a platform that is dedicated to presenting criminal data in a visually appealing and informative way through beautiful infographics.
                     We believe that by presenting criminal data in a clear and concise manner, we can help citizens better understand the scope and severity of criminal activity in their communities. 
                     In addition, we provide citizens with the ability to report crimes, offer suggestions to law enforcement, and enable police to easily track criminal records to help solve cases more efficiently.
                      Our goal is to provide a comprehensive resource for both citizens and law enforcement to help create safer communities for all.
                      </h3>
                </p>
                </div>
        </div>
    </div>
    <div id="piechart" style="width: 100%; height: 500px;"></div>
            <div class="text-center">
                <h1>The Pie Chart Shows Motor vehicle Theft</h1>
                <p>Our website has published a pie chart depicting the number of car thefts that have occurred in the city over the past year. The chart shows that out of a total of 1000 car thefts, 60% of them were stolen from public places such as parking lots and streets, while 25% were stolen from residential areas, and the remaining 15% were stolen from commercial areas.

These statistics serve as a stark reminder of the importance of taking precautions to protect our vehicles from theft, such as parking in well-lit areas and investing in anti-theft devices. We hope that by providing this information, we can raise awareness about the issue of car theft and help people take steps to keep their vehicles safe.  </p><br>
    <div class="text-center">
        <h1>Location of police stations</h1><br><br>
        <iframe src="https://www.google.com/maps/d/embed?mid=1JzRn_YZBp23qZ8utdHAGgnZ6m_JwIUY&hl=en&ehbc=2E312F"  
            width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>  

    

        

       <div id="footer-bg"><div id="footer"><ul style="padding-left:10px;"><li 
class="first-list"> <div class="region region-footer-block1">
 <div id="block-menu-menu-know-your-police" class="clear-block block 
block-menu"> 
 <div class="block-inner">
 <h3 class="firsts" style="margin:5px 0">Know Your Police</h3>
 
 <div class="content">
 <ul class="menu"><li class="first leaf"><a href="/bokaro" title="Bokaro 
District Police Profile">Bokaro</a></li>
<li class="leaf"><a href="/chatra" title="Chatra District Police 
Profile">Chatra</a></li>
<li class="leaf"><a href="/deoghar" title="Deoghar District Police 
Profile">Deoghar</a></li>
<li class="leaf"><a href="/dhanbad" title="Dhanbad District Police 
Profile">Dhanbad</a></li>
<li class="leaf"><a href="/dumka" title="Dumka District Police 
Profile">Dumka</a></li>
<li class="leaf"><a href="/east-singhbhum" title="East Singhbhum (Jamshedpur) 
District Police Profile">East Singhbhum</a></li>
<li class="leaf"><a href="/garhwa" title="Garhwa District Police 
Profile">Garhwa</a></li>
<li class="leaf"><a href="/giridih" title="Giridih District Police 
Profile">Giridih</a></li>
<li class="leaf"><a href="/godda" title="Godda District Police 
Profile">Godda</a></li>
<li class="leaf"><a href="/gumla" title="Gumla District Police 
Profile">Gumla</a></li>
<li class="leaf"><a href="/hazaribagh" title="Hazaribagh District Police 
Profile">Hazaribagh</a></li>
<li class="leaf"><a href="/jamtara" title="Jamtara District Police 
Profile">Jamtara</a></li>
<li class="leaf"><a href="/khunti" title="Khunti District Police 
Profile">Khunti</a></li>
<li class="leaf"><a href="/koderma" title="Koderma District Police 
Profile">Koderma</a></li>
<li class="leaf"><a href="/latehar" title="Latehar District Police 
Profile">Latehar</a></li>
<li class="leaf"><a href="/lohardaga" title="Lohardaga District Police 
Profile">Lohardaga</a></li>
<li class="leaf"><a href="/pakur" title="Pakur District Police 
Profile">Pakur</a></li>
<li class="leaf"><a href="/palamu" title="Palamu District Police 
Profile">Palamu</a></li>
<li class="leaf"><a href="/ramgarh" title="Ramgarh District Police 
Profile">Ramgarh</a></li>
<li class="leaf"><a href="/ranchi" title="Ranchi District Police 
Profile">Ranchi</a></li>
<li class="leaf"><a href="/sahibganj" title="Sahibganj District Police 
Profile">Sahibganj</a></li>
<li class="leaf"><a href="/seraikella-kharsawan" title="Seraikella Kharsawan 
District Police Profile">Saraikela</a></li>
<li class="leaf"><a href="/simdega" title="Simdega District Police 
Profile">Simdega</a></li>
<li class="last leaf"><a href="/west-singhbhum" title="West Singhbhum (Chaibasa) 
District Police Profile">West Singhbhum</a></li>
</ul> </div>
</div> </div> </div>
 </li>
 <footer>
       
 
        <div class="footer_navigation ">
          
          <li><a href="index.php">Home</a></li>
            <li><a href="">Helpline</a></li>
            <li><a href="contact.php">Contact US</a></li>
          
       </div>
       
          
       
         
        </footer>


</body>
</html>