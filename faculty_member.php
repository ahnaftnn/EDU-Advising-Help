<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../style.css"/>
  <style>
    .faculty-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      padding: 20px;
    }

    .faculty-card {
      text-align: center;
      border: 1px solid maroon;
      border-radius: 8px;
      padding: 15px;
      background-color: #f9f9f9;
      box-shadow: 2px 2px 5px maroon;
    }

    .faculty-card img {
      width: 100%;
      height: auto;
      max-height: 250px;
      border-radius: 50%;
    }

    .faculty-card h2, .faculty-card strong {
      margin: 10px 0;
    }
    .fm{
      text-align: center;
    }
  </style>
</head>
<body>
  
  <?php include('../connections/header.php'); ?>
  <h1 class=fm>
    
    FACULTY MEMBERS
  </h1>
  <div class="body">
    <div class="Title">
      <h1></h1>
    </div>
    <div class="faculty-grid">
      <div class="faculty-card">
        <img src="../image/Ishtiaquesir.jpg" alt="Dr. Ishtiaque Aziz Zahed">
        <h2>DR. ISHITAQUE AZIZ ZAHED</h2>
        <strong>ASSOCIATE PROFESSOR & ASSOCIATE DEAN</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Dr. K.M. Mohibul Kabir.jpg" alt="Dr. K.M. Mohibul Kabir">
        <h2>DR. K.M. MOHIBUL KABIR</h2>
        <strong>ASSOCIATE PROFESSOR</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/ATM Mahmudur Rahman.jpg" alt="ATM Mahmudur Rahman">
        <h2>ATM MAHMUDUR RAHMAN</h2>
        <strong>ASSISTANT PROFESSOR
        </strong>
      </div>
      <div class="faculty-card">
        <img src="../image/GOLAM MOKTADER DAIYAN.jpg" alt="GOLAM MOKTADER DAIYAN">
        <h2>GOLAM MOKTADER DAIYAN</h2>
        <strong>ASSISTANT PROFESSOR</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/MOHAMMAD TOUFIQ AHMED.jpg" alt="MOHAMMAD TOUFIQ AHMED">
        <h2>MOHAMMAD TOUFIQ AHMED</h2>
        <strong>ASSISTANT PROFESSOR
        </strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Samiul Alam.jpg" alt="Md Samiul Alam">
        <h2>MD SAMIUL ALAM</h2>
        <strong>ASSISTANT PROFESSOR</strong>
        
      </div>
      <div class="faculty-card">
        <img src="../image/Linkon Chowdhury.jpg" alt="Linkon Chowdhury">
        <h2>LINKON CHOWDHURY</h2>
        <strong>ASSISTANT PROFESSOR</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Sohrab Hossain.jpg" alt="Sohrab Hossain">
        <h2>SOHRAB HOSSAIN</h2>
        <strong>ASSISTANT PROFESSOR</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/MD Shahidul Alam.jpg" alt="Dr Md. Shahidul Alam">
        <h2>DR. MD. SHAHIDUL ALAM</h2>
        <strong>ASSISTANT PROFESSOR</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/DR.MOHAMMAD MAHBUBUR RAHMAN.jpg" alt="Dr. Mohammad Mahbubur Rahman">
        <h2>DR. MOHAMMAD MAHBUBUR RAHMAN</h2>
        <strong>ASSISTANT PROFESSOR</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/KaziEkramulHoque (1).jpg" alt="Kazi Ekramul Hoque">
        <h2>KAZI EKRAMUL HOQUE</h2>
        <strong>ASSISTANT PROFESSOR</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Arifa Sultana Zarna.jpg" alt="Arifa Sultana Zarna">
        <h2>ARIFA SULTANA ZARNA</h2>
        <strong>ASSISTANT PROFESSOR</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Nahida Nigar.jpg" alt="Nahida Nigar">
        <h2>NAHIDA NIGAR</h2>
        <strong>ASSISTANT PROFESSOR</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/S.M. Baque Billah.jpg" alt="S.M. Baque Billah">
        <h2>S.M. BAQUE BILLAH</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/KAZI MUHAMMAD ASIF ASHRAFI.jpg" alt="Kazi Muhammad Asif Ashrafi">
        <h2>KAZI MUHAMMAD ASIF ASHRAFI</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Promila Haque.jpg" alt="Promila Haque">
        <h2>PROMILA HAQUE</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Tania Khadem.jpg" alt="Tania Khadem">
        <h2>TANIA KHADEM</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Saraf Anika.jpg" alt="Saraf Anika">
        <h2>SARAF ANIKA</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Mashky Chowdhury Surja.jpg" alt="Mashky Chowdhury Surja">
        <h2>MASHKY CHOWDHURY SURJA</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Sharmin Akter.jpg" alt="Sharmin Akter">
        <h2>SHARMIN AKTER</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Ahamed Al Arifin.jpg" alt="Ahamed-Al-Arifin">
        <h2>AHAMED-AL-ARIFIN</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Muhammad Asif Hasan.jpg" alt="Muhammad Asif Hasan">
        <h2>MUHAMMAD ASIF HASAN</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Sayeda Suaiba Anwar.jpg" alt="Sayeda Suaiba Anwar">
        <h2>SAYEDA SUAIBA ANWAR</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/DR MD SHAHIDUL ALAM.jpg" alt="Wahidul Alam">
        <h2>WAHIDUL ALAM</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
        <img src="../image/Joydwip Mohajon.jpg" alt="Joydwip Mohajon">
        <h2>JOYDWIP MOHAJON</h2>
        <strong>LECTURER</strong>
      </div>
      <div class="faculty-card">
  <img src="../image/DR MD SHAHIDUL ALAM.jpg" alt="Saikat Chowdhury">
  <h2>SAIKAT CHOWDHURY</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Tasminatul Jannah.jpg" alt="Tasminatul Jannah">
  <h2>TASMINATUL JANNAH</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Sultan Mahmud.jpg" alt="Sultan Mahmud">
  <h2>SULTAN MAHMUD</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Md. Sabbir Al Ahsan.jpg" alt="Sabbir Al Ahsan">
  <h2>SABBIR AL AHSAN</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/MD Shahidul Alam.jpg" alt="Ms. Mumtahina Ahmed">
  <h2>MS. MUMTAHINA AHMED</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Tanvir_Azhar.jpg" alt="Mr. Tanvir Azhar">
  <h2>MR. TANVIR AZHAR</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Parna Mutsuddy.jpg" alt="Parna Mutsuddy">
  <h2>PARNA MUTSUDDY</h2>
  <strong>LECTURER IN ENGLISH</strong>
</div>
<div class="faculty-card">
  <img src="../image/Mr. Md.Jahidul Hasan Jahid.jpg" alt="Mr. Md. Jahidul Hasan Jahid">
  <h2>MR. MD. JAHIDUL HASAN JAHID</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Mr. Md. Jamil Uddin.jpg" alt="Mr. Md. Jamil Uddin">
  <h2>MR. MD. JAMIL UDDIN</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Ms.Nishat Soultana Chy.jpg" alt="Ms. Nishat Soultana Chy">
  <h2>MS. NISHAT SOULTANA CHY</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Mr.Md.Rakibul Islam.jpg" alt="Mr. Md. Rakibul Islam">
  <h2>MR. MD. RAKIBUL ISLAM</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Arshiana Shamir.jpg" alt="Arshiana Shamir">
  <h2>ARSHIANA SHAMIR</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Mr. Tahsin Mahmud.jpg" alt="Mr. Tahsin Mahmud">
  <h2>MR. TAHSIN MAHMUD</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Md.Siratul Mostakim Ifty.jpg" alt="Md. Siratul Mostakim Ifty">
  <h2>MD. SIRATUL MOSTAKIM IFTY</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Jannatun Naim.jpg" alt="Jannatun Naim">
  <h2>JANNATUN NAIM</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Anika Bushra.jpg" alt="Anika Bushra">
  <h2>ANIKA BUSHRA</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Sourav Adhikary.jpg" alt="Sourav Adhikary">
  <h2>SOURAV ADHIKARY</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Saklain Abdullah.jpg" alt="Saklain Abdullah">
  <h2>SAKLAIN ABDULLAH</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Nasehatul Mustakim Nabil.jpg" alt="Nasehatul Mustakim Nabila">
  <h2>NASEHATUL MUSTAKIM NABILA</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/ENGR.MD.Jibon Mia.jpg" alt="Engr. Md. Jibon Mia">
  <h2>ENGR. MD. JIBON MIA</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Shadika Afroze.jpg" alt="Shadika Afroze">
  <h2>SHADIKA AFROZE</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Mohammed Morshed Rana.jpg" alt="Mohammed Morshed Rana">
  <h2>MOHAMMED MORSHED RANA</h2>
  <strong>LECTURER</strong>
</div>
<div class="faculty-card">
  <img src="../image/Pinak Shadhu Khan.jpg" alt="Pinak Shadhu Khan">
  <h2>PINAK SHADHU KHAN</h2>
  <strong>TEACHING ASSISTANT (CONTRACTUAL)</strong>
</div>
<div class="faculty-card">
  <img src="../image/sanath kumar das.jpg" alt="Sanath Kumar Das">
  <h2>SANATH KUMAR DAS</h2>
  <strong>LECTURER</strong>
</div>


      
    </div>
  </div>
</body>
</html>
