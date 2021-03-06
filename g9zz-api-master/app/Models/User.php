<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2017/4/12
 * Time: 下午4:20
 */

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\Models\User
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $password
 * @property int $github_id
 * @property int $mobile
 * @property string $github_url
 * @property string $email
 * @property string $name
 * @property string $login_token
 * @property string $is_banned
 * @property string $image_url
 * @property int $topic_count
 * @property int $reply_count
 * @property int $follower_count
 * @property string $city
 * @property string $company
 * @property string $twitter_account
 * @property string $personal_website
 * @property string $introduction
 * @property string $certification
 * @property int $notification_count
 * @property string $github_name
 * @property string $real_name
 * @property string $linkedin
 * @property string $payment_qrcode
 * @property string $wechat_qrcode
 * @property string $avatar
 * @property string $login_qr
 * @property string $wechat_openid
 * @property string $wechat_unionid
 * @property string $weibo_name
 * @property string $weibo_link
 * @property bool $verified
 * @property string $verification_token
 * @property string $email_notify_enabled
 * @property string $register_source
 * @property string $last_actived_at
 * @property string $deleted_at
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCertification($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCompany($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmailNotifyEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereFollowerCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereGithubId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereGithubName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereGithubUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereImageUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereIntroduction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereIsBanned($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLastActivedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLinkedin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLoginQr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLoginToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereMobile($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereNotificationCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePaymentQrcode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePersonalWebsite($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRealName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRegisterSource($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereReplyCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereTopicCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereTwitterAccount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereVerificationToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereVerified($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereWechatOpenid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereWechatQrcode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereWechatUnionid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereWeiboLink($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereWeiboName($value)
 */
class User extends Authenticatable
{

    protected $table = 'users';
    protected $fillable = [
        'password','github_id','github_url','email',
        'name','login_token','is_banned','image_url',
        'topic_count','reply_count','follower_count','city',
        'company','twitter_account','personal_website','introduction',
        'certification','notification_count','github_name','real_name',
        'linkedin','payment_qrcode','wechat_qrcode','avatar',
        'login_qr','wechat_openid','wechat_unionid','weibo_name',
        'weibo_link','verified','verification_token','email_notify_enabled',
        'register_source','last_actived_at',
    ];
}