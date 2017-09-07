<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category extends MY_Controller
{
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model', 'cate');
    }

    /**
     * 查看栏目
     */
    public function index()
    {
        $data['category'] = $this->cate->check();
        $this->load->view('admin/app_category', $data);
    }

    /**
     * 添加APP
     */
    public function add_app()
    {
        $this->load->library('form_validation');
        if (($data = $this->input->post(null, true)) && $this->form_validation->run('add_cate')) {
            $this->cate->add(array( 'cname' => $data['cname'] ));
            success('admin/category/index', '添加成功');
        }
        $this->load->view('admin/add_cate');
    }


    /**
     * 编辑动作
     */
    public function edit()
    {
        $cid = $this->uri->segment(4);
        $category = $this->cate->check_cate($cid);
        $this->load->library('form_validation');
        if (($data = $this->input->post(null, true)) && $this->form_validation->run('add_cate')) {
            $data['category'] = $this->cate->update_cate($data['cid'], array( 'cname' => $data['cname'] ));
            success('admin/category/index', '修改成功');
        }
        $this->load->view('admin/edit_cate', array(
            'category' => $category
        ));
    }


    /**
     * 删除栏目
     */
    public function del()
    {
        $cid = $this->uri->segment(4);
        $this->cate->del($cid);
        success('admin/category/index', '删除成功');
    }


}