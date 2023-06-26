<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrowdMall extends Model
{
    use HasFactory;
    public static $file;
    public static $fileExtension;
    public static $fileName;
    public static $fileURL;
    private static function getFileURL($request, $crowdmall=null) {
        if (self::$file = $request->file('file'))
        {
            if ($crowdmall)
            {
                if (file_exists($crowdmall->file))
                {
                    unlink($crowdmall->file);
                }
            }
            self::$fileExtension   = self::$file->getClientOriginalExtension();
            self::$fileName        = str_replace(" ","-",$request->company_name).'-'.time().'.'.self::$fileExtension;
            self::$fileURL         = self::$file->move('storage/crowdmall-file/', self::$fileName);

        }
        else
        {
            if ($crowdmall)
            {
                self::$fileURL = $crowdmall->file;
            }
            else
            {
                self::$fileURL = null;
            }

        }
        return self::$fileURL;
    }
    private static function saveBasicInfo($crowdmall, $request, $fileURL): void
    {
        $crowdmall->company_name = $request->company_name;
        $crowdmall->brands = json_encode($request->brands);
        $crowdmall->reg_com_address_link_one = $request->reg_com_address_link_one;
        $crowdmall->reg_com_address_link_two = $request->reg_com_address_link_two;
        $crowdmall->post_code = $request->post_code;
        $crowdmall->country = $request->country;
        $crowdmall->contact_person_first_name = $request->contact_person_first_name;
        $crowdmall->contact_person_last_name = $request->contact_person_last_name;
        $crowdmall->contact_number = $request->contact_number;
        $crowdmall->email = $request->email;
        $crowdmall->business_reg_no = $request->business_reg_no;
        $crowdmall->business_category = $request->business_category;
        $crowdmall->market_place = $request->market_place;
        $crowdmall->tax_amount = $request->tax_amount;
        $crowdmall->voucher_code = $request->voucher_code;
        $crowdmall->file = $fileURL;
        $crowdmall->bank_name = $request->bank_name;
        $crowdmall->bank_account_name = $request->bank_account_name;
        $crowdmall->bank_account_no = $request->bank_account_no;
        $crowdmall->bank_branch_code = $request->bank_branch_code;
        $crowdmall->bank_shift_code = $request->bank_shift_code;
        $crowdmall->shareholder_first_name = $request->shareholder_first_name;
        $crowdmall->shareholder_last_name = $request->shareholder_last_name;
        $crowdmall->shareholder_identity_pass_no = $request->shareholder_identity_pass_no;
        $crowdmall->shareholder_contact_no = $request->shareholder_contact_no;
        $crowdmall->shareholder_bank_account_no = $request->shareholder_bank_account_no;
        $crowdmall->shareholder_bank_branch_code = $request->shareholder_bank_branch_code;
        $crowdmall->shareholder_email = $request->shareholder_email;
        $crowdmall->agree = $request->agree;
        $crowdmall->save();
    }

    public static function newCrowdMall($request): void
    {
        self::saveBasicInfo(new self(), $request, self::getFileURL($request));
    }
}
