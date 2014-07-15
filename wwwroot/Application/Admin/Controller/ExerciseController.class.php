<?php

namespace Admin\Controller;
use Admin\Model\AuthGroupModel;
use Think\Page;

class ExerciseController extends AdminController {
    public function index()
    {
        /*$nickname       =   I('nickname');
        $map['status']  =   array('egt',0);
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('Member', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '增加动作';*/

        //$map['status']  =   array('egt',0);
        $this->display();
    }
    
    public function myexercise()
    {
        $_REQUEST = array();
        $list = $this->lists('Exercise', null, null,null, 'eid, ename, sex, rating,status');
        int_to_string($list);
        
        $this->assign('_list', $list);
        $this->meta_title = '增加动作'; 
        $this->display();
    }
    

    public function add($ename = '', $mainmuscletype = 1, $exercisetype = 1, $equiptype = 1,
                $forcetype = 1, $sport = 1, $level = 1, $sex = '',$imgurl = '')

    {  
        if(IS_POST){
            //echo $ename;
                $description = '';
                $filename = '';
                $videoname = '';
                /*$exercise = array('ename' => $ename, 
                    'mainmuscleID' => $mainmuscletype, 
                    'exercisetypeID' => $exercisetype, 
                    'equiptypeID' => $equiptype,
                    'forcetypeID' => $forcetype,
                    'sportID' => $sport, 
                    'levelID' => $level, 
                    'sex' => $sex, 
                    'description' => $description, 
                    'filename' => $filename, 
                    'videoname' => $videoname);*/
                    $exercise = D('Exercise');
                    $info = $exercise->addExercise($ename, $mainmuscletype, $exercisetype, $equiptype,
                $forcetype, $sport, $level, $sex, $description, $filename, $videoname,$imgurl);
                    
                if($info){
                    if($imgurl!=""){
                        rename($_SERVER['DOCUMENT_ROOT'].$imgurl,"./Uploads/ExercisePic/".$ename.".jpg");
                        $data = array('imgurl'=>"./Uploads/ExercisePic/".$ename.".jpg");
                        M('Exercise')->where(array('eid'=>$info))->save($data);
                    }
                    $this->success('动作添加成功！',U('myexercise'));
                } else {
                    $this->error('动作添加失败！');
                }
        } 
        else {
            $this->display();
        }
    }
    
    public function delete($table,$uid){
        $id = array_unique((array)I('id',0));
        $id = is_array($id) ? implode(',',$id) : $id;
        if (empty($id) ) {
            $this->error('请选择要操作的数据!');
        }
        $arr = explode(',',$id);
        foreach ($arr as $key => $value) {
            M($table)->where(array($uid=>$value))->delete();
        }
        $this->success('删除成功!');
    }

    public function setstatus($id = 0,$status){
        if(IS_AJAX){
            $status = ($status==1) ? 0 : 1;
            $data = array('status'=>$status);
            if(M('Exercise')->where(array('eid'=>$id))->save($data)){
                $this->success('禁用成功!');
            }else{
                $this->error("禁用失败!");
            }
        }
    }

    /**
     * 上传图片
     * @author huajie <banhuajie@163.com>
     */
    public function uploadPicture(){
        //TODO: 用户登录检测
        /* 返回标准数据 */
        $return  = array('status' => 1, 'info' => '上传成功', 'data' => '');
        $this->ajaxReturn($return);die;
        /* 调用文件上传组件上传文件 */
        $Picture = D('Picture');
        $pic_driver = C('PICTURE_UPLOAD_DRIVER');
        $info = $Picture->upload_img(
            $_FILES,
            C('PICTURE_UPLOAD_IMG'),
            C('PICTURE_UPLOAD_DRIVER'),
            C("UPLOAD_{$pic_driver}_CONFIG")
        ); //TODO:上传到远程服务器

        /* 记录图片信息 */
        if($info){
            $return['status'] = 1;
            $return = array_merge($info['download'], $return);
        } else {
            $return['status'] = 0;
            $return['info']   = $Picture->getError();
        }
        $return['info'] = $info['download'];
        /* 返回JSON数据 */
        $this->ajaxReturn($return);
    }

    public function edit($id = 0){
        if(IS_POST){
            $Exercise = D('Exercise');
            $data = $Exercise->create();
            $Exercise->eid = $id;
            if($data){
                rename($_SERVER['DOCUMENT_ROOT'].$Exercise->imgurl,"./Uploads/ExercisePic/".$Exercise->ename.".jpg");            
                $Exercise->imgurl = "./Uploads/ExercisePic/".$Exercise->ename.".jpg";
                if($Exercise->save()){
                   $this->success('更新成功',U('myexercise'));
                } else {
                    $this->error('更新失败');
                }
            } else {
                $this->error($Exercise->getError());
            }
        } else {
            $info = array();
            /* 获取数据 */
            $info = M('Exercise')->field(true)->find($id);

            if(false === $info){
                $this->error('获取信息失败!');
            }
            $this->assign('info', $info);   
            $this->display();
        }
    }
}

