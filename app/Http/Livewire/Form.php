<?php

namespace App\Http\Livewire;

use App\Models\Catalog;
use App\Models\Catalog_meta;
use App\Models\Category;
use App\Models\Category_Catalog;
use App\Models\City;
use App\Models\Docs;
use App\Models\Image;
use App\Models\Smsc;
use App\Models\User;
use App\Models\UserSmsCode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Livewire\TemporaryUploadedFile;

class Form extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $user_id, $slug, $body, $price, $archive;
    public $docs = [];
    public $isOpen = 0;
    public $check = [];
    public $photo_main;
    public $photo_second;
    public $photo_third;
    public $photo_for;
    public $photo_five;
    public $photo_six;
    public $option = [];
    public $value = [];
    public $inputs = [];
    public $category_id = [];
    public $search;
    public $title;
    public $image;
    public $sms;

    //User
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $phone;
    public $code;
    public $registerForm = false;
    public $smsConfirm = false;
    public $number_check = true;

    public $metas = [];

    public $show = false;
    public $register = false;
    public $login = false;

    public function render()
    {
        $search = '%' . $this->search . '%';
        $categories = Category::query()
            ->orderby('name', 'ASC')
            ->where('name', 'LIKE', $search)
            ->get();
        $this->categories = $categories;
        return view('livewire.sale_business.form', [
            'catalog' => Catalog::query()->first(),
            'categories' => $categories,
            'cities' => City::all()
        ]);
    }

    public function store()
    {
        $post = Catalog::query()->updateOrCreate([
            'title' => $this->title,
            'body' => $this->body,
            'slug' => $this->slug,
            'price' => $this->price,
            'is_approved' => 0,
            'user_id'=>auth()->user()->id,
            'status_1'=>0,
            'status_2'=>0,
            'status_3'=>0
        ]);


        foreach ($this->category_id as $item) {
            Category_Catalog::query()->create([
                'category_id' => $item,
                'catalog_id' => $post->id,
            ]);
        }


        foreach ($this->metas as $key => $value) {

            Catalog_meta::query()->create([
                'option' => $key,
                'value' => $value,
                'catalog_id' => $post->id,
            ]);
        }
        if($this->docs){
            foreach ($this->docs as $doc){
                $file = $doc->hashName();
                $storedDocs = $file->storeAs('public/docs');
                Docs::query()->create([
                    'docs'=>$storedDocs,
                    'docs_id'=>$post->id
                ]);
            }

        }

        if ($this->photo_main) {
            Image::query()->where('post_id', $post->id)->delete();
                $storedImage = $this->photo_main ->store('public/photos');
                Image::query()->create([
                    'url' => $storedImage,
                    'title' => '-',
                    'post_id' => $post->id,
                    'featured' => 1
                ]);
        }
        if ($this->photo_second) {
            Image::query()->where('post_id', $post->id)->delete();
            $storedImage = $this->photo_second ->store('public/photos');
            Image::query()->create([
                'url' => $storedImage,
                'title' => '-',
                'post_id' => $post->id,
                'featured' => 2
            ]);
        }
        if ($this->photo_third) {
            Image::query()->where('post_id', $post->id)->delete();
            $storedImage = $this->photo_third ->store('public/photos');
            Image::query()->create([
                'url' => $storedImage,
                'title' => '-',
                'post_id' => $post->id,
                'featured' => 3
            ]);
        }
        if ($this->photo_for) {
            Image::query()->where('post_id', $post->id)->delete();
            $storedImage = $this->photo_for ->store('public/photos');
            Image::query()->create([
                'url' => $storedImage,
                'title' => '-',
                'post_id' => $post->id,
                'featured' => 4
            ]);
        }
        if ($this->photo_five) {
            Image::query()->where('post_id', $post->id)->delete();
            $storedImage = $this->photo_five ->store('public/photos');
            Image::query()->create([
                'url' => $storedImage,
                'title' => '-',
                'post_id' => $post->id,
                'featured' => 5
            ]);
        }
        if ($this->photo_six) {
            Image::query()->where('post_id', $post->id)->delete();
            $storedImage = $this->photo_six ->store('public/photos');
            Image::query()->create([
                'url' => $storedImage,
                'title' => '-',
                'post_id' => $post->id,
                'featured' => 6
            ]);
        }
        $this->alert('success', 'Businessbuy.kz', [
            'position' => 'center',
            'timer' => 5000,
            'toast' => true,
            'text' => 'Спасибо! Мы получили вашу заявку и вскоре рассмотрим ее. Мы свяжемся с вами после экспресс проверки вашей заявки!',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Закрыть',
            'showCancelButton' => true,
            'showConfirmButton' => false,
        ]);


        $this->resetInputFields();
    }


    private function resetInputFields()
    {
        $this->title = null;
        $this->body = null;
        $this->metas = null;
        $this->category_id = null;
        $this->photos = null;
    }

    public function delete($id)
    {
        Catalog::query()->find($id)->delete();
        DB::table('post_id', $id)->delete();
        session()->flash('success', 'Сообщение успешно удалено!
.');
    }

    public function smsConfirm()
    {
        $this->smsConfirm = !$this->smsConfirm;
    }

    public function loginForm()
    {
        $this->login = !$this->login;
    }

    public function formNumber()
    {
        $this->number_check = !$this->number_check;
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function updatedPhone()
    {
        $validatedDate = $this->validate([
            'phone' => 'required|min:11|max:11',
        ]);
        $code = random_int(1111, 9999);
        $phone = str_replace(array('(', ')', ' ', '-', '+'), '', $this->phone);
        $phone = substr_replace($phone, '+7', 0, 1);

        //проверка на наличие номера
        $duplicatePhone = User::where('phone', $phone)->first();

        if ($duplicatePhone) {
            $this->loginForm();
            return $this->alert('warning', 'Businessbuy.kz', [
                'position' => 'center',
                'timer' => 4000,
                'toast' => true,
                'text' => 'Вы уже зарегистрированы.Войдите в свой аккаунт.!',
                'confirmButtonText' => 'Ok',
                'showCancelButton' => true,
                'showConfirmButton' => false,
            ]);
        }

        $this->smsConfirm();
        $this->alert('success', 'Businessbuy.kz', [
            'position' => 'top',
            'timer' => 4000,
            'toast' => true,
            'text' => 'Смс отправлен!',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Закрыть',
            'showCancelButton' => true,
            'showConfirmButton' => false,
        ]);

        //проверка на спам нажатий отправки смс
        $lastSms = UserSmsCode::where('phone', $phone)->whereBetween('created_at', [date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . "-1 minutes")), date('Y-m-d H:i:s')])->first();

        if ($lastSms) {
            return $this->alert('error', 'Businessbuy.kz', [
                'position' => 'top',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Пароль уже отправлен. Попробуйте чуть позже!',
                'confirmButtonText' => 'Ok',
                'cancelButtonText' => 'Закрыть',
                'showCancelButton' => true,
                'showConfirmButton' => false,
            ]);

        }

        //создание смс и ее отправка
        $userSmsCode = UserSmsCode::create(
            ['phone' => $phone, 'code' => Hash::make($code)]
        );


        $sms = Smsc::send_sms($phone, "код: " . $code, 0);

    }

    public function smsCode()
    {
        $validatedDate = $this->validate([
            'code' => 'required',
        ]);

        $phone = str_replace(array('(', ')', ' ', '-', '+'), '', $this->phone);
        $phone = substr_replace($phone, '+7', 0, 1);

        $UserSmsCode = UserSmsCode::where('phone', $phone)->orderBy('created_at', 'desc')->first();

        if ($UserSmsCode) {
            if (!Hash::check($this->code, $UserSmsCode->code)) {
                $this->code = null;
                return $this->alert('error', 'Businessbuy.kz', [
                    'position' => 'top',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Пароль не был отправлен. Пароль не правильный.',
                    'confirmButtonText' => 'Ok',
                    'cancelButtonText' => 'Закрыть',
                    'showCancelButton' => true,
                    'showConfirmButton' => false,
                ]);

            } else {
                session()->flash('success', 'Код Совпадает!');
                $this->formNumber();
                $this->register();
                $this->alert('warning', 'Businessbuy.kz', [
                    'position' => 'top',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Вам необходимо зарегистрироваться.',
                    'confirmButtonText' => 'Ok',
                    'cancelButtonText' => 'Закрыть',
                    'showCancelButton' => true,
                    'showConfirmButton' => false,
                ]);
            }
        }


    }

    public function registerStore()
    {
        $validatedDate = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
        ]);
        $this->password = Hash::make($this->password);

        $user = User::create(['firstname' => $this->firstname,'lastname'=>$this->firstname, 'email' => $this->email, 'password' => $this->password, 'phone' => $this->phone]);
        auth()->login($user);
        $this->register();
        return $this->alert('success', 'Businessbuy.kz', [
            'position' => 'top',
            'timer' => 5000,
            'toast' => true,
            'text' => 'Вы успешно авторизовались!',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Закрыть',
            'showCancelButton' => true,
            'showConfirmButton' => false,
        ]);

    }

    public function login()
    {
        $validatedDate = $this->validate([
            'password' => 'required',
        ]);

        if (Auth::attempt(array('phone' => $this->phone, 'password' => $this->password))) {
            $this->alert('success', 'Businessbuy.kz', [
                'position' => 'top',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Вы успешно вошли в аккаунт!',
                'confirmButtonText' => 'Ok',
                'cancelButtonText' => 'Закрыть',
                'showCancelButton' => true,
                'showConfirmButton' => false,
            ]);

        } else {
            $this->alert('success', 'Businessbuy.kz', [
                'position' => 'top',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Не верный пароль.!',
                'confirmButtonText' => 'Ok',
                'cancelButtonText' => 'Закрыть',
                'showCancelButton' => true,
                'showConfirmButton' => false,
            ]);
        }

    }

}
