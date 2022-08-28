let dark = false;

  





    function onThemeChange() { 
        let dark3 = localStorage.getItem('darkValue');
        if(dark3 == "false")
        {
            darkTheme();
            localStorage.setItem('darkValue', true); 
        }
        else{
            lightTheme();
            localStorage.setItem('darkValue', false); 
        }
    }






    function lightTheme()
    {
        let cssStyleSheet = document.getElementById("mainStyle");
        cssStyleSheet.href = "asset/css/light.css";
            document.getElementById("header_logo").src = "asset/img/light.png";
            document.getElementById("theme_icon").className = "fas fa-moon";
    }





    function darkTheme(){
        let cssStyleSheet = document.getElementById("mainStyle");
        let path = (cssStyleSheet.href).substring((cssStyleSheet.href).length-9, (cssStyleSheet.href).length);
        
            cssStyleSheet.href = "asset/css/night.css";
            document.getElementById("header_logo").src = "asset/img/night.png";
            document.getElementById("theme_icon").className = "fas fa-sun";               
    }

    

    window.onload = function() { 
        let dark3 = localStorage.getItem('darkValue'); 
        
        if(dark3 == "true")
        {
            darkTheme();
            
        }
     }

    