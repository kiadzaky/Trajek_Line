<?php
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $id_jabatan = $ci->session->userdata('id_jabatan');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('tb_user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $karyawanAccess = $ci->db->get_where('tb_user_access_menu', [
            'id_jabatan' => $id_jabatan,
            'menu_id' => $menu_id
        ]);

        if ($karyawanAccess->num_rows() > 1) {
            redirect('auth/blocked');
        }
    }
}

function check_access($id_jabatan, $menu_id)
{
    $ci = get_instance();
    $ci->db->where('id_jabatan', $id_jabatan);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('tb_user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}
