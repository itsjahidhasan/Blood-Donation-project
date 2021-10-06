<?php
	


	$districtName = $_REQUEST['districtName'];

    $response="";
    if($districtName == "Dhaka")
    {
      $response .='<option value="Adabor">
               <option value="Airport">
               <option value="Ashulia">
               <option value="Badda">
               <option value="Banani">
               <option value="Bangshal">
               <option value="Cantonment">
               <option value="Chackbazar">
               <option value="Darussalam">
               <option value="Daskhinkhan">
               <option value="Demra">
               <option value="Dhamrai">
               <option value="Dhanmondi">
               <option value="Dohar">
               <option value="Gandaria">
               <option value="Gulshan">
               <option value="Hazaribag">
               <option value="Jatrabari">
               <option value="Kafrul">
               <option value="Kalabagan">
               <option value="Kamrangirchar">
               <option value="Keraniganj">
               <option value="Khilgaon">
               <option value="Khilkhet">
               <option value="Kotwali">
               <option value="Lalbag">
               <option value="Mirpur Model">
               <option value="Mohammadpur">
               <option value="Motijheel">
               <option value="Mugda">
               <option value="Nawabganj">
               <option value="New Market">
               <option value="Pallabi">
               <option value="Paltan">
               <option value="Ramna">
               <option value="Rampura">
               <option value="Rupnagar">
               <option value="Sabujbag">
               <option value="Savar">
               <option value="Shah Ali">
               <option value="Shahbag">
               <option value="Shahjahanpur">
               <option value="Sherebanglanagar">
               <option value="Shyampur">
               <option value="Sutrapur">
               <option value="Tejgaon">
               <option value="Tejgaon I/A">
               <option value="Turag">
               <option value="Uttara">
               <option value="Uttara West">
               <option value="Uttarkhan">
               <option value="Vatara">
               <option value="Wari">';
    }
    else if($districtName == "Faridpur")
    {
      $response .='<option value="Faridpur Sadar">
               <option value="Boalmari">
               <option value="Alfadanga">
               <option value="Madhukhali">
               <option value="Bhanga">
               <option value="Nagarkanda">
               <option value="Charbhadrasan">
               <option value="Sadarpur">
               <option value="Shaltha">';
    }
    else if($districtName == "Gazipur")
    {
      $response .='<option value="Gazipur Sadar-Joydebpur">
               <option value="Kaliakior">
               <option value="Kapasia">
               <option value="Sripur">
               <option value="Kaliganj">
               <option value="Tongi">';
    }
    else if($districtName == "Gopalganj")
    {
      $response .='<option value="Gopalganj Sadar">
               <option value="Kashiani">
               <option value="Kotalipara">
               <option value="Muksudpur">
               <option value="Tungipara">';
    }
    else if($districtName == "Kishoreganj")
    {
      $response .='<option value="Astagram">
               <option value="Bajitpur">
               <option value="Bhairab">
               <option value="Hossainpur">
               <option value="Itna">
               <option value="Karimganj">
               <option value="Katiadi">
               <option value="Kishoreganj Sadar">
               <option value="Kuliarchar">
               <option value="Mithamain">
               <option value="Nikli">
               <option value="Pakundia">
               <option value="Tarail">
               <option value="Madaripur Sadar">
               <option value="Kalkini">
               <option value="Rajoir">
               <option value="Shibchar">';
    }
    else if($districtName == "Madaripur")
    {
      $response .='<option value=" Madaripur Sadar">
               <option value="Kalkini">
               <option value="Rajoir">
               <option value="Shibchar">';
    }
    else if($districtName == "Manikganj")
    {
      $response .='<option value="Manikganj Sadar">
               <option value="Singair">
               <option value="Shibalaya">
               <option value="Saturia">
               <option value="Harirampur">
               <option value="Ghior">
               <option value="Daulatpur">';
    }
    else if($districtName == "Munshiganj")
    {
      $response .='<option value="Lohajang">
               <option value="Sreenagar">
               <option value=" Munshiganj Sadar">
               <option value="Sirajdikhan">
               <option value="Tongibari">
               <option value="Gazaria">';
    }
    else if($districtName == "Naryanganj")
    {
      $response .=' <option value="Araihazar">
               <option value="Sonargaon">
               <option value="Bandar">
               <option value="Naryanganj Sadar">
               <option value="Rupganj">
               <option value="Siddirgonj">';
    }
    else if($districtName == "Narsingdi")
    {
      $response .='<option value="Belabo">
               <option value="Monohardi">
               <option value="Narsingdi Sadar">
               <option value="Palash">
               <option value="Raipura">
               <option value="Shibpur">';
    }
    else if($districtName == "Rajbari")
    {
      $response .='<option value="Baliakandi">
               <option value="Goalandaghat">
               <option value="Pangsha">
               <option value="Kalukhali">
               <option value="Rajbari Sadar">';
    }
    else if($districtName == "Shariatpur")
    {
      $response .='<option value="Shariatpur Sadar-Palong">
               <option value="Damudya">
               <option value="Naria">
               <option value="Jajira">
               <option value="Bhedarganj">
               <option value="Gosairhat">';
    }
    else if($districtName == "Tangail")
    {
      $response .='<option value="Tangail Sadar">
               <option value="Sakhipur">
               <option value="Basail">
               <option value="Madhupur">
               <option value="Ghatail">
               <option value="Kalihati">
               <option value="Nagarpur">
               <option value="Mirzapur">
               <option value="Gopalpur">
               <option value="Delduar">
               <option value="Bhuapur">
               <option value="Dhanbari">';
    }
    else if($districtName == "Barguna")
    {
      $response .='<option value="Amtali">
               <option value="Bamna">
               <option value="Barguna Sadar">
               <option value="Betagi">
               <option value="Patharghata">
               <option value="Taltali">';
    }
    else if($districtName == "Barisal")
    {
      $response .='<option value="Muladi">
               <option value="Babuganj">
               <option value="Agailjhara">
               <option value="Barisal Sadar">
               <option value="Bakerganj">
               <option value="Banaripara">
               <option value="Gaurnadi">
               <option value="Hizla">
               <option value="Mehendiganj">
               <option value="Wazirpur">
               <option value="Airport">
               <option value="Kawnia">
               <option value="Bondor">';
    }
    else if($districtName == "Bhola")
    {
      $response .='<option value="Bhola Sadar">
               <option value="Burhanuddin">
               <option value="Char Fasson">
               <option value="Daulatkhan">
               <option value="Lalmohan">
               <option value="Manpura">
               <option value="Tazumuddin">';
    }
    else if($districtName == "Jhalokati")
    {
      $response .='<option value="Jhalokati Sadar">
               <option value="Kathalia">
               <option value="Nalchity">
               <option value="Rajapur">';
    }
    else if($districtName == "Patuakhali")
    {
      $response .='<option value="Bauphal">
               <option value="Dashmina">
               <option value="Galachipa">
               <option value="Kalapara">
               <option value="Mirzaganj">
               <option value="Patuakhali Sadar">
               <option value="Dumki">
               <option value="Rangabali">';
    }
    else if($districtName == "Pirojpur")
    {
      $response .='<option value="Bhandaria">
               <option value="Kaukhali">
               <option value="Mathbaria">
               <option value="Nazirpur">
               <option value="Nesarabad">
               <option value="Pirojpur Sadar">
               <option value="Zianagar">';
    }
    else if($districtName == "Bandarban")
    {
      $response .='<option value="Bandarban Sadar">
               <option value="Thanchi">
               <option value="Lama">
               <option value="Naikhongchhari">
               <option value="Ali kadam">
               <option value="Rowangchhari">
               <option value="Ruma">';
    }
    else if($districtName == "Brahmanbaria")
    {
      $response .='<option value="Brahmanbaria Sadar">
               <option value="Ashuganj">
               <option value="Nasirnagar">
               <option value="Nabinagar">
               <option value="Sarail">
               <option value=" Shahbazpur Town">
               <option value="Kasba">
               <option value="Akhaura">
               <option value="Bancharampur">
               <option value="Bijoynagar">';
    }
    else if($districtName == "Chandpur")
    {
      $response .='<option value="Chandpur Sadar">
               <option value="Faridganj">
               <option value="Haimchar">
               <option value="Haziganj">
               <option value="Kachua">
               <option value="Matlab Uttar">
               <option value="Matlab Dakkhin">
               <option value="Shahrasti">';
    }
    else if($districtName == "Chittagong")
    {
      $response .='<option value="Anwara">
               <option value="Banshkhali">
               <option value="Boalkhali">
               <option value="Chandanaish">
               <option value="Fatikchhari">
               <option value="Hathazari">
               <option value="Lohagara">
               <option value="Mirsharai">
               <option value="Patiya">
               <option value="Rangunia">
               <option value="Raozan">
               <option value="Sandwip">
               <option value="Satkania">
               <option value="Sitakunda">
               <option value="Akborsha">
               <option value="Baijid bostami">
               <option value="Bakolia">
               <option value="Bandar">
               <option value="Chandgaon">
               <option value="Chokbazar">
               <option value="Doublemooring">
               <option value="EPZ">
               <option value="Hali Shohor">
               <option value="Kornafuli">
               <option value="Kotwali">
               <option value="Kulshi">
               <option value="Pahartali">
               <option value="Panchlaish">
               <option value="Potenga">
               <option value="Shodhorgat">';
    }
    else if($districtName == "Comilla")
    {
      $response .='<option value="Barura">
               <option value="Brahmanpara">
               <option value="Burichong">
               <option value="Chandina">
               <option value="Chauddagram">
               <option value="Daudkandi">
               <option value="Debidwar">
               <option value="Homna">
               <option value="Comilla Sadar">
               <option value="Laksam">
               <option value="Monohorgonj">
               <option value="Meghna">
               <option value="Muradnagar">
               <option value="Nangalkot">
               <option value=" Comilla Sadar South">
               <option value="Titas">';
    }
    else if($districtName == "Cox's Bazar")
    {
      $response .='<option value="Chakaria">
               <option value="Chakaria">
               <option value="Cox&#39;s Bazar Sadar">
               <option value="Kutubdia">
               <option value="Maheshkhali">
               <option value="Ramu">
               <option value="Teknaf">
               <option value="Ukhia">
               <option value="Pekua">';
    }
    else if($districtName == "Feni")
    {
      $response .='<option value="Feni Sadar">
               <option value="Chagalnaiya">
               <option value="Daganbhyan">
               <option value="Parshuram">
               <option value="Fhulgazi">
               <option value="Sonagazi">';
    }
    else if($districtName == "Khagrachhari")
    {
      $response .='<option value="Dighinala">
               <option value="Khagrachhari">
               <option value="Lakshmichhari">
               <option value="Mahalchhari">
               <option value="Manikchhari">
               <option value="Matiranga">
               <option value="Panchhari">
               <option value="Ramgarh">';
    }
    else if($districtName == "Lakshmipur")
    {
      $response .='<option value="Lakshmipur Sadar">
               <option value="Raipur">
               <option value="Ramganj">
               <option value="Ramgati">
               <option value="Komol Nagar">';
    }
    else if($districtName == "Noakhali")
    {
      $response .='<option value="Noakhali Sadar">
               <option value="Begumganj">
               <option value="Chatkhil">
               <option value="Companyganj">
               <option value="Shenbag">
               <option value="Hatia">
               <option value="Kobirhat">
               <option value="Sonaimuri">
               <option value="Suborno Char">';
    }
    else if($districtName == "Rangamati")
    {
      $response .='<option value="Rangamati Sadar">
               <option value="Belaichhari">
               <option value="Bagaichhari">
               <option value="Barkal">
               <option value="Juraichhari">
               <option value="Rajasthali">
               <option value="Kaptai">
               <option value="Langadu">
               <option value="Nannerchar">
               <option value="Kaukhali">';
    }
    else if($districtName == "Bagerhat")
    {
      $response .='<option value="Bagerhat Sadar">
               <option value="Chitalmari">
               <option value="Fakirhat">
               <option value="Kachua">
               <option value="Mollahat">
               <option value="Mongla">
               <option value="Morrelganj">
               <option value="Rampal">
               <option value="Sarankhola">';
    }
    else if($districtName == "Chuadanga")
    {
      $response .='<option value="Damurhuda">
               <option value="Chuadanga
               -S">
               <option value="Jibannagar">
               <option value="Alamdanga">';
    }
    else if($districtName == "Jessore")
    {
      $response .='<option value="Abhaynagar">
               <option value="Keshabpur">
               <option value="Bagherpara">
               <option value="Jessore Sadar">
               <option value="Chaugachha">
               <option value="Manirampur">
               <option value="Jhikargachha">
               <option value="Sharsha">';
    }
    else if($districtName == "Jhenaidah")
    {
      $response .='<option value="Jhenaidah Sadar">
               <option value="Maheshpur">
               <option value="Kaliganj">
               <option value="Kotchandpur">
               <option value="Shailkupa">
               <option value="Harinakunda">';
    }
    else if($districtName == "Khulna")
    {
      $response .='<option value="Terokhada">
               <option value="Batiaghata">
               <option value="Dacope">
               <option value="Dumuria">
               <option value="Dighalia">
               <option value="Koyra">
               <option value="Paikgachha">
               <option value="Phultala">
               <option value="Rupsa">
               <option value="Aranghata">
               <option value="Daulatpur">
               <option value="Harintana">
               <option value="Horintana">
               <option value="Khalishpur">
               <option value="Khanjahan Ali">
               <option value="Khulna Sadar">
               <option value="Labanchora">
               <option value="Sonadanga">';
    }
    else if($districtName == "Kushtia")
    {
      $response .='<option value="Kushtia Sadar">
               <option value="Kumarkhali">
               <option value="Daulatpur">
               <option value="Mirpur">
               <option value="Bheramara">
               <option value="Khoksa">';
    }
    else if($districtName == "Magura")
    {
      $response .='<option value="Magura Sadar">
               <option value="Mohammadpur">
               <option value="Shalikha">
               <option value="Sreepur">';
    }
    else if($districtName == "Meherpur")
    {
      $response .='<option value="Angni">
               <option value="Mujib Nagar">
               <option value="Meherpur
               -S">';
    }
    else if($districtName == "Narail")
    {
      $response .='<option value="Narail
      -S Upazilla">
               <option value="Lohagara Upazilla">
               <option value="Kalia Upazilla">';
    }
    else if($districtName == "Satkhira")
    {
      $response .='<option value="Satkhira Sadar">
               <option value="Assasuni">
               <option value="Debhata">
               <option value="Tala">
               <option value="Kalaroa">
               <option value="Kaliganj">
               <option value="Shyamnagar">';
    }
    else if($districtName == "Bogra")
    {
      $response .='<option value="Adamdighi">
               <option value="Bogra Sadar">
               <option value="Sherpur">
               <option value="Dhunat">
               <option value="Dhupchanchia">
               <option value="Gabtali">
               <option value="Kahaloo">
               <option value="Nandigram">
               <option value="Sahajanpur">
               <option value="Sariakandi">
               <option value="Shibganj">
               <option value="Sonatala">';
    }
    else if($districtName == "Joypurhat")
    {
      $response .='<option value="Joypurhat S">
               <option value="Akkelpur">
               <option value="Kalai">
               <option value="Khetlal">
               <option value="Panchbibi">';
    }
    else if($districtName == "Naogaon")
    {
      $response .='<option value="Naogaon Sadar">
               <option value="Mohadevpur">
               <option value="Manda">
               <option value="Niamatpur">
               <option value="Atrai">
               <option value="Raninagar">
               <option value="Patnitala">
               <option value="Dhamoirhat">
               <option value="Sapahar">
               <option value="Porsha">
               <option value="Badalgachhi">';
    }
    else if($districtName == "Natore")
    {
      $response .='<option value="Natore Sadar">
               <option value="Baraigram">
               <option value="Bagatipara">
               <option value="Lalpur">
               <option value="Natore Sadar">
               <option value="Baraigram">';
    }
    else if($districtName == "Pabna")
    {
      $response .='<option value="Atgharia">
               <option value="Bera">
               <option value="Bhangura">
               <option value="Chatmohar">
               <option value="Faridpur">
               <option value="Ishwardi">
               <option value="Pabna Sadar">
               <option value="Santhia">
               <option value="Sujanagar">';
    }
    else if($districtName == "Rajshahi")
    {
      $response .='<option value="Bagha">
               <option value="Bagmara">
               <option value="Charghat">
               <option value="Durgapur">
               <option value="Godagari">
               <option value="Mohanpur">
               <option value="Paba">
               <option value="Puthia">
               <option value="Tanore">
               <option value="Boalia">
               <option value="Motihar">
               <option value="Shah mokhdum">
               <option value="Rajpara">';
    }
    else if($districtName == "Sirajganj")
    {
      $response .='<option value=" Sirajganj Sadar">
               <option value="Belkuchi">
               <option value="Chauhali">
               <option value="Kamarkhanda">
               <option value="Kazipur">
               <option value="Raiganj">
               <option value="Shahjadpur">
               <option value="Tarash">
               <option value="Ullahpara">';
    }
    else if($districtName == "Dinajpur")
    {
      $response .='<option value="Birampur">
               <option value="Birganj">
               <option value="Biral">
               <option value="Bochaganj">
               <option value="Chirirbandar">
               <option value="Phulbari">
               <option value="Ghoraghat">
               <option value="Hakimpur">
               <option value="Kaharole">
               <option value="Khansama">
               <option value="Dinajpur Sadar">
               <option value="Nawabganj">
               <option value="Parbatipur">';
    }
    else if($districtName == "Gaibandha")
    {
      $response .='<option value="Fulchhari">
               <option value=" Gaibandha sadar">
               <option value="Gobindaganj">
               <option value="Palashbari">
               <option value="Sadullapur">
               <option value="Saghata">
               <option value="Sundarganj">';
    }
    else if($districtName == "Kurigram")
    {
      $response .='<option value="Kurigram Sadar">
               <option value="Nageshwari">
               <option value="Bhurungamari">
               <option value="Phulbari">
               <option value="Rajarhat">
               <option value="Ulipur">
               <option value="Chilmari">
               <option value="Rowmari">
               <option value="Char Rajibpur">';
    }
    else if($districtName == "Lalmanirhat")
    {
      $response .='<option value="Lalmanirhat Sadar">
               <option value="Aditmari">
               <option value="Kaliganj">
               <option value="Hatibandha">
               <option value="Patgram">';
    }
    else if($districtName == "Nilphamari")
    {
      $response .='<option value="Nilphamari Sadar">
               <option value="Saidpur">
               <option value="Jaldhaka">
               <option value="Kishoreganj">
               <option value="Domar">
               <option value="Dimla">';
    }
    else if($districtName == "Panchagarh")
    {
      $response .='<option value="Panchagarh Sadar">
               <option value="Debiganj">
               <option value="Boda">
               <option value="Atwari">
               <option value="Tetulia">';
    }
    else if($districtName == "Rangpur")
    {
      $response .='<option value="Badarganj">
               <option value="Mithapukur">
               <option value="Gangachara">
               <option value="Kaunia">
               <option value="Rangpur Sadar">
               <option value="Pirgachha">
               <option value="Pirganj">
               <option value="Taraganj">';
    }
    else if($districtName == "Thakurgaon")
    {
      $response .='<option value="Thakurgaon Sadar">
               <option value="Pirganj">
               <option value="Baliadangi">
               <option value="Haripur">
               <option value="Ranisankail">';
    }
    else if($districtName == "Habiganj")
    {
      $response .='<option value="Ajmiriganj">
               <option value="Baniachang">
               <option value="Bahubal">
               <option value="Chunarughat">
               <option value="Habiganj Sadar">
               <option value="Lakhai">
               <option value="Madhabpur">
               <option value="Nabiganj">
               <option value="Shaistagonj">';
    }
    else if($districtName == "Moulvibazar")
    {
      $response .='<option value="Moulvibazar Sadar">
               <option value="Barlekha">
               <option value="Juri">
               <option value="Kamalganj">
               <option value="Kulaura">
               <option value="Rajnagar">
               <option value="Sreemangal">';
    }
    else if($districtName == "Sunamganj")
    {
      $response .='<option value="Bishwamvarpur">
               <option value="Chhatak">
               <option value="Derai">
               <option value="Dharampasha">
               <option value="Dowarabazar">
               <option value="Jagannathpur">
               <option value="Jamalganj">
               <option value="Sulla">
               <option value="Sunamganj Sadar">
               <option value="Shanthiganj">
               <option value="Tahirpur">';
    }
    else if($districtName == "Sylhet")
    {
      $response .='<option value="Sylhet Sadar">
               <option value="Beanibazar">
               <option value="Bishwanath">
               <option value="Dakshin Surma">
               <option value="Balaganj">
               <option value="Companiganj">
               <option value="Fenchuganj">
               <option value="Golapganj">
               <option value="Gowainghat">
               <option value="Jaintiapur">
               <option value="Kanaighat">
               <option value="Zakiganj">
               <option value="Nobigonj">
               <option value="Airport">
               <option value="Hazrat Shah Paran">
               <option value="Jalalabad">
               <option value="Kowtali">
               <option value="Moglabazar">
               <option value="Osmani Nagar">
               <option value="South Surma ">';
    }
    else if($districtName == "Jamalpur")
    {
      $response .='<option value="Dewanganj">
               <option value="Baksiganj">
               <option value="Islampur">
               <option value="Jamalpur Sadar">
               <option value="Madarganj">
               <option value="Melandaha">
               <option value="Sarishabari">
               <option value="Narundi Police I
               .C">';
    }
    else if($districtName == "Mymensingh")
    {
      $response .='<option value="Bhaluka">
               <option value="Trishal">
               <option value="Haluaghat">
               <option value="Muktagachha">
               <option value="Dhobaura">
               <option value="Fulbaria">
               <option value="Gaffargaon">
               <option value="Gauripur">
               <option value="Ishwarganj">
               <option value="Mymensingh Sadar">
               <option value="Nandail">
               <option value="Phulpur">';
    }
    else if($districtName == "Netrakona")
    {
      $response .='<option value="Kendua Upazilla">
               <option value="Atpara Upazilla">
               <option value="Barhatta Upazilla">
               <option value="Durgapur Upazilla">
               <option value="Kalmakanda Upazilla">
               <option value="Madan Upazilla">
               <option value="Mohanganj Upazilla">
               <option value="Netrakona
               -S Upazilla">
               <option value="Purbadhala Upazilla">
               <option value="Khaliajuri Upazilla">';
    }
    else if($districtName == "Sherpur")
    {
      $response .='<option value="Jhenaigati">
               <option value="Nakla">
               <option value="Nalitabari">
               <option value="Sherpur Sadar">
               <option value="Sreebardi">';
    }
    else{
      $response .='';
    }

	echo $response;
?>