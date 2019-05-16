<template>
    <div id="menu" class="bgcolor">
        <div class="menu">
            <div id="left-menu" class="bgcolor">
                <!-- Home -->
            </div>
            <div id="center-menu"  class="bgcolor">
                <img src="../../img/logo.png" class="image-tam" alt="" srcset="">
                <!-- <li class="dropdown semtopico">
                    <a href="#" class="dropdown-toggle semlink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consulta<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="font-link">Apostas</a></li>
                        <li><a href="#" class="font-link">Cambista</a></li>
                        <li><a href="#" class="font-link">Jogo</a></li>
                    </ul>
                </li>

                <li class="dropdown semtopico">
                    <a href="#" class="semlink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consulta<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="font-link">Apostas</a></li>
                        <li><a href="#" class="font-link">Cambista</a></li>
                        <li><a href="#" class="font-link">Jogo</a></li>
                    </ul>
                </li> -->
                

            </div>
            <div id="right-menu" v-on:click="expandir()" class="bgcolor">
                <!-- Sair -->
                <!-- <div class="wrapper">
                    <div class="navbar" id="nav">
                        <div class="first" id="nav1"></div>
                        <div class="second" id="nav2"></div>
                        <div class="third" id="nav3"></div>
                    </div>
                </div> -->
                <div id="burguer">
                    <div class="first" id="nav1"></div>
                    <div class="second" id="nav2"></div>
                    <div class="third" id="nav3"></div>
                </div>
            </div>
        </div>
    </div>        
</template>

<script>
    export default {
        data:{
            estado: "fechado"
        },
        methods:{
            expandir: function () {
                if(this.estado == 'fechado'){
                    document.getElementById('nav1').style.transform = 'translateY(15px) rotate(45deg)';
                    document.getElementById('nav1').style.transition = 'all 0.5s ease';
                    
                    document.getElementById('nav2').style.opacity = '0';
                    document.getElementById('nav2').style.transition = 'all 0.2s ease';

                    document.getElementById('nav3').style.transform = 'translateY(-15px) rotate(-45deg)';
                    document.getElementById('nav3').style.transition = 'all 0.5s ease';
                
                    document.getElementById('burguer').style.transition = 'all 0.3s ease';

                    this.estado = 'aberto';
                }else{
                    document.getElementById('nav1').style.transform = 'translateY(0px) rotate(0deg)';
                    document.getElementById('nav1').style.transition = 'all 0.5s ease';
                    
                    document.getElementById('nav2').style.opacity = '1';
                    document.getElementById('nav2').style.transition = 'all 0.2s ease';

                    document.getElementById('nav3').style.transform = 'translateY(0px) rotate(0deg)';
                    document.getElementById('nav3').style.transition = 'all 0.5s ease';
                
                    document.getElementById('burguer').style.transition = 'all 0.3s ease';

                    this.estado = 'fechado'
                }

            }
        }
    }
</script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');

    .menu{
        width: 100%;
        color: white;
        font-family: 'Roboto Slab', serif;
        font-size: 20px;
        height: 100px;
    }

    .menulight{
        width: 100%;
        color: black;
        background-color: #fff;
        font-family: 'Roboto Slab', serif;
        font-size: 15px;
        height: 40px;
        border-bottom: 2px solid black;
        border-top: 2px solid black;
        text-align: center;
    }

    .bgcolor{
        background-color:#1d496d;
    }

    .bgcolorligth{
        background-color:#fff;
        color: black;
    }
/* 
    .bgcolor:hover{
        background: #8492B3;
    } */

    #left-menu{
        float: left;
        padding-top: 30px;
        padding-bottom: 30px;
        width: 20%;
        text-align: center;
    }

    #center-menu{
        float: left;
        padding-top: 25px;
        padding-bottom: 25px;
        width: 60%;
        text-align: center;
    }

    #right-menu{
        float: left;
        /* padding-top: 30px;
        padding-bottom: 30px; */
        width: 20%;
        text-align: center;
    }

    .semtopico{
        list-style: none;
        float: left;
        padding-left: 30px;
    }

    .semlink, .semlink:hover{
        text-decoration: none;
        color: white;
    }

    .font-link{
        font-size: 20px;
    }

    .bigfont{
        font-size: 60px;
        margin: 0;
        padding: 0;
        font-weight: inherit;
    }

    .image-tam{
        width: 20%;
    }

/*  */


#burguer{
    display: none;
    position: relative;
    right: 10px;
    width: 100px;
    height: 100px;
    cursor: pointer;
    transition: all 0.3s ease;
}

#burguer div{
    height: 6px;
    width: 50px;
    background-color: #fff;
    position: relative;
    transition: all 0.5s ease;
}

#burguer .first{
  top: 30px;
  left: 20px;
}

#burguer .second{
  top: 40px;
  left: 20px;
}

#burguer .third{
  top: 50px;
  left: 20px;
}



@media screen and (max-width: 992px) {      
        #menu{
            height: 80px;
        }

        #left-menu{
            padding-top: 25px;
            padding-bottom: 25px;
        }

        #center-menu{
            padding-top: 0px;
            padding-bottom: 0px;
        }

         #burguer{
            display: block;
            right: 20px;
            width: 100px;
            height: 60px;            
        }

        #burguer .first{
            top: 20px;
            left: 20px;
        }

        #burguer .second{
            top: 30px;
            left: 20px;
        }

        #burguer .third{
            top: 40px;
            left: 20px;
        }
       
    }


    @media screen and (max-width: 600px) {       

        #menu{
            height: 80px;
        }
        #left-menu{
            padding-top: 25px;
            padding-bottom: 25px;
        }

        #center-menu{
            margin-top: 20px;
            padding-top: 0px;
            padding-bottom: 0px;
        }

        #burguer{
            display: block;
            right: 20px;
            width: 100px;
            height: 60px;            
        }

        #burguer .first{
            top: 20px;
            left: 20px;
        }

        #burguer .second{
            top: 30px;
            left: 20px;
        }

        #burguer .third{
            top: 40px;
            left: 20px;
        }

        

    }

        
</style>
