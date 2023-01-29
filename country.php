<?php

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Covid-19</a>
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>';
        
  
       echo '
       
       <li class="nav-item">
       <a class="nav-link" href="/Project/country.php">Country</a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="/Project/vaccine.php">Vaccine</a>
       </li>
       
       <li class="nav-item">
       <a class="nav-link" href="/Project/Covid-19-registration-from.php">Registration Form</a>
       </li>
       
       
        
    </div>
  </div>
</nav>';

?>
<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('IMG/pic3.jpg'); background-repeat: no-repeat;
  background-size: cover;">
  <form align="right" name="Country">
  
  <table align="right" height="20px" width="25%" border="3">
      <tr>
        <td><b>Choose your Country For Show Information: </b></td>
        <td>
    <select name="CountryMenu" id="CountryMenu">
       <option value="nothing" selected="selected">Choose your option</option>
       <option value="/Project/Country/all_records.php">China</option>
       <option value="/Project/Country/Itali_records.php">Italy</option>
       <option value="/Project/Country/india_records.php">India</option>
       <option value="/Project/Country/bangladesh_records.php">Bangladesh</option>
    </select>
    </td>
      </tr>
      
    </table>
   
  </form>
  <script type="text/javascript">
    var info = document.getElementById('CountryMenu');
    info.onchange = function()
    {
      var option = this.options[this.selectedIndex];
      if (option.value != "nothing") 
      {
        window.open(option.value, "Country Info", "");
      }
    }
  </script>
 
  </script><br><br><br>

  <p><h6>Coronaviruses are a big family of different viruses. Some of them cause the common cold in people. Others infect animals, including bats, camels, and cattle. But how did SARS-CoV-2, the new coronavirus that causes COVID-19, come into being?

Here’s what we know about the virus that was first detected in Wuhan, <a href="https://ourworldindata.org/coronavirus/country/china?fbclid=IwAR0wHy5FS09IN8hXPk7v1mO_36NRCdtztlgshxIZpVLXPSefbhQ-QhOtOxg&country=~CHN">China</a>, in late 2019 and has set off a global pandemic.Experts say SARS-CoV-2 originated in bats. That’s also how the coronaviruses behind Middle East respiratory syndrome (MERS) and severe acute respiratory syndrome (SARS) got started.

SARS-CoV-2 made the jump to humans at one of Wuhan’s open-air “wet markets.” They’re where customers buy fresh meat and fish, including animals that are killed on the spot.

Some wet markets sell wild or banned species like cobras, wild boars, and raccoon dogs. Crowded conditions can let viruses from different animals swap genes. Sometimes the virus changes so much it can start to infect and spread among people.Still, the Wuhan market didn’t sell bats at the time of the outbreak. That’s why early suspicion also fell on pangolins, also called scaly anteaters, which are sold illegally in some markets in China. Some coronaviruses that infect pangolins are similar to SARS-CoV-2.

As SARS-CoV-2 spread both inside and outside China, it infected people who have had no direct contact with animals. That meant the virus is transmitted from one human to another. It’s now spreading in the U.S. and around the globe, meaning that people are unwittingly catching and passing on the coronavirus. This growing worldwide transmission is what is now a pandemic.
</h6>
<br>
<h1>Coronavirus Evolution :</h1><hr style="height:2px;border-width:50;background-color:black"><br>
<h6>Scientists first identified a human coronavirus in 1965. It caused a common cold. Later that decade, researchers found a group of similar human and animal viruses and named them after their crown-like appearance.
Seven coronaviruses can infect humans. The one that causes SARS emerged in southern China in 2002 and quickly spread to 28 other countries. More than 8,000 people were infected by July 2003, and 774 died. A small outbreak in 2004 involved only four more cases. This coronavirus causes fever, headache, and respiratory problems such as cough and shortness of breath.

MERS started in Saudi Arabia in 2012. Almost all of the nearly 2,500 cases have been in people who live in or travel to the Middle East. This coronavirus is less contagious than its SARS cousin but more deadly, killing 858 people. It has the same respiratory symptoms but can also cause kidney failure.
</h6>
<img src="IMG/pic6.png" width="500" height="500">
<h1> COVID-19 in Wuhan: </h1><br>
<article>In December 2019, some of the local hospitals in the Wuhan city of China reported several patients with atypical pneumonia of unknown cause (She et al., 2020).
Interestingly, most of the patients were linked with the Huanan Seafood Wholesale market in Jianghan District, Wuhan.
Considering the gravity of the situation, the Chinese Government declared a public health emergency and formal investigation of the matter on December 31, 2019, with the National Health Commission (NHC, China), Center for Disease Control and Prevention (CDC, China), and Wuhan Municipal Health Commission to find out the cause and the etiological agent (Callaway, 2020). Broncho-alveolar lavage (BAL) samples were collected from patients at Wuhan Jinyintan Hospital on December 30, 2019 and utilized to infect human airway epithelial cells (Vero-E6 and Huh-7) (Lu et al., 2020b). The total RNA was extracted from these infected cells and used to clone and sequence the causative agent(s).
 Most of sequence reads matched against the lineage B of the genus beta-coronavirus and showed more than 85% identity with bat-SL-CoVZC45 coronavirus and 80% identity to SARS Corona-Virus (SARS-CoV) (Lu et al., 2020b). Therefore, this newly isolated virus was named as novel coronavirus 2019 (2019-nCoV). Considering the degree of homology, the International Committee on Taxonomy of Viruses (ICTV), the global nodal agency holding the responsibility of classification and nomenclature of viruses, renamed the 2019-nCoV as SARS-CoV-2 and, later on, the disease caused by SARS-CoV-2 was announced as COVID-19 by the WHO (Coronaviridae Study Group of the International Committee on Taxonomy of, 2020).</article>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439724.1092628657!2d114.02019236263736!3d30.567816001012886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x342eaef8dd85f26f%3A0x39c2c9ac6c582210!2sWuhan%2C%20Hubei%2C%20China!5e0!3m2!1sen!2sbd!4v1638598762885!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<article>As per the report entitled “The Epidemiological Characteristics of an Outbreak of 2019 Novel Coronavirus Diseases (COVID-19-China), 2020” published by the CDC-China on February 11, 2020, a total of 72,314 cases of COVID-19 were recorded. Of these, based on the viral RNA detection in the samples, 62% were classified as confirmed positive; whereas based on the symptoms and exposure, 22% as suspected cases.
   While 1% of the cases were classified as asymptomatic, meaning that they were diagnosed positive for viral nucleic acid but lack typical symptoms of COVID-19 includes dry cough, tiredness, sore throat and/or shortness of breath, etc. Approximately, ~87% of cases in China belonged to the age group between 30 and 79 years, 3% were 80 years or older, 1% were aged between 10 and 19, years and 1% to the age group of 9 years or younger (Armitage and Nellums, 2020). 
   Majority of these cases (~81%) were classified as mild (either not have any kind of pneumonia or with mild pneumonia), 14% as severe, and 5% as critical. Most of the COVID-19 critical cases were observed to be associated with respiratory failure, septic shock, chest pain, multiple organ dysfunction/failure, and/or loss of speech and movement. The case fatality rate (CFR) of the COVID-19 infection was observed to be ~2.3% (1,023 deaths among 44,672 confirmed cases) (Onder et al., 2020). 
   However, the highest CFR (14.8%) was observed in patients who were aged ≥80 years or who had pre-existing co-morbidities (i.e. high blood pressure, cardiovascular disease, diabetes, chronic respiratory issues, and cancer) followed by 8% in patients aged 70–79 years. Interestingly, no case fatality was reported for patient’s aged ≤9 years. Although enormous efforts were made by Chinese health agencies to control the transmission, SARS-CoV-2 got spread across the world in a very short period of time (Guan et al., 2020) (Figure 2).
</article>
<a href="/Project/Italian.php"> Itali </a>


</p>

</div>
</body>
</html>