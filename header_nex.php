

<style type="text/css">
 

#navbar {
    position: absolute;
    top: 1px;
    left: 1px;
    right: 1px;
    height: 60px;
    margin: 0;
    padding: 0;
    list-style: none;
    background: #222;
    font-family: 'Oswald', sans-serif;
    font-size: 18px;
    font-weight: 300;
    z-index: 1;
}

#navbar li {
    position: relative;
    float: left;
    line-height: 60px;
    background: inherit;
    text-align: center;
    transition: all .2s;
}

#navbar li a {
    position: relative;
    display: block;
    padding: 0 20px;
    line-height: inherit;
    color: white;
    text-decoration: none;
}

#navbar li:before {
    content: '';
    display: block;
    position: absolute;
    left: 50%;
    margin-left: -30px;
    width: 60px;
    height: 60px;
    background: #222;
    border-radius: 50%;
    transform: rotate(45deg);
    transition: all 0, background .2s;
}
#navbar li:hover:before {
    margin-top: 1px;
    border-radius: 50% 50% 0 50%;
    transition: all .1s, background .2s, margin-top .2s cubic-bezier(.5,30,.2,0);
}
#navbar li:hover,
#navbar li:hover:before {
    background: #3a3a3a;
}
#navbar li.active,
#navbar li.active:before {
    background: steelblue;
}</style>

<script type="text/javascript">
$('#navbar li').click(function() {
    $(this).addClass('active').siblings('li').removeClass('active');
});
</script>



<ul id="navbar">
    <li class="active"><a href="http://localhost/E-garbage/">E-Garbage Monitoring System</a></li>
     <li><a href="http://localhost/E-garbage/document.php">View Documentation</a></li>
    <li><a href="http://localhost/E-garbage/show_all.php">View All Bins</a></li>
         <li><a href="http://localhost/E-garbage/bin_log.php">View Logs</a></li>

</ul>