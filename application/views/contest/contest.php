<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <?php
        $uri = $this->uri->segment(1);
        $uri2 = $this->uri->segment(2);

        if($uri2 != ""){
            $this->load->view($uri.'/'.$uri2);
        }else{
            $this->load->view($uri.'/index');
        }
        $this->load->view($uri.'/sideright');
        ?>        
    </div>
</div>