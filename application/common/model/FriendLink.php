<?php
namespace app\common\model;
use think\Model;

class FriendLink extends Model
{
    
    /*新增*/
    public static function inserts($data)
    {
    	$check = FriendLink::create($data);
    	if ($check) {
    		return true;
    	}else{
    		return false;
    	}
    }
  
    /*数据查询*/
    public static function lists(){
        $lists=FriendLink::where([])->order('orderby desc')->paginate(5);
    	// $lists=FriendLink::where([])->order('id asc')->select();
        return $lists;
    }


    /*删除数据*/
    public static function dels($id){
    	$res=FriendLink::where(["id"=>$id])->delete();
    	 if(false !== $res){
            $data = [
                'status' => 0,
                'msg' => '删除成功！',
            ];
        }else {
            $data = [
                'status' => 1,
                'msg' => '删除失败！',
            ];
        }
        echo json_encode($data);
    }

    /*查询一条数据*/
    public static function finds($id){
    	$info=FriendLink::where(["id"=>$id])->find();
    	return $info;
    }

    /*修改数据*/
    public static function updatemsgs($data,$id){
    	// dump($data);
    	$info=FriendLink::where(["id"=>$id])->update($data);
    	if ($info) {
    		return true;
    	}
    }

    /*停用*/
    public static function update_status($id,$is_show){
        // dump($data);
    $info=FriendLink::where(["id"=>$id])->update(['is_show' => $is_show]);
        if ($info) {
            return true;
        }
    }

}