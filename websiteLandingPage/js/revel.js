        window.addEventListener('scroll',reval);

        function reval(){
            var revals=document.querySelectorAll('.reval');
            for(var i=0; i<revals.length;i++){
                var windowheight=window.innerHeight;
                var revaltop=revals[i].getBoundingClientRect().top;
                var revalpoint=20;


                if(revaltop<windowheight-revalpoint){
                    revals[i].classList.add('active');
                }
                else{
                    revals[i].classList.remove('active');
                }

            }
        }