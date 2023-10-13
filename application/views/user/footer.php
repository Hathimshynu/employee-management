
<style>
 .fixed-footer {
display:none;
}
 @media only screen and (max-width : 991px) {
    
.fixed-footer {
    z-index: 100;
    display: block!important;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 60px;
    background-color: #180b7c!important;
    box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.1);
}

.icon-wrapper {
  display: flex;
  justify-content: space-around;
  align-items: center;
  height: 100%;
}

.icon-wrapper a {
  color: #999;
  text-decoration: none;
}

.icon-wrapper a:hover {
  color: #d2a60c;
}

.icon-wrapper i {
  font-size: 24px;
}
a.footericon {
    display: flex;
    flex-direction: column;
    align-items: center;
}
a.footericon {
    font-size: 10px;
    color: white!important;
}
}

</style>
<footer class="fixed-footer">
  <div class="icon-wrapper">
 
  </div>
</footer>
<?php 
$this->session->set_flashdata('success_message','');
$this->session->set_flashdata('error_message','');
?>
      </main>
     
    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Backend Bundle JavaScript -->
    <script src="<?=BASEURL?>assets/js/libs.min.js"></script>
    <!-- widgetchart JavaScript -->
    <script src="<?=BASEURL?>assets/js/charts/widgetcharts.js"></script>
    <!-- fslightbox JavaScript -->
    <script src="<?=BASEURL?>assets/js/fslightbox.js"></script>
    <!-- app JavaScript -->
    <script src="<?=BASEURL?>assets/js/app.js"></script>
    <!-- apexchart JavaScript -->
    <script src="<?=BASEURL?>assets/js/charts/apexcharts.js"></script>
  </body>


</html>

<?php if($this->session->flashdata('success_message',''));
if($this->session->flashdata('error_message',''));?>