<x-userlayout>

    <div class="prayer-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="py-title">
                        <h2 class="L-tit2">Loyal Prayer</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pryer-contant">
        <div class="container">
            <div class="row">
                <form action="" method="POST">
                <div class="row">
                    <div class="col-4">
                        <div class="py-form">
                            <!-- Prayer Title -->
                            <h3>Prayer</h3>
                            <p>ဆုတောင်းချက်များကို တစ်ခါပေးပို့လျှင် တစ်ခုသာ ပေးပို့ပေးပါရန်။</p>
                            <p class="mb-4">ဆုတောင်းချက်များကို တစ်ခါပေးပို့လျှင် တစ်ခုသာ ပေးပို့ပေးပါရန်။</p>
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form8Example1" class="form-control" />
                                <label class="form-label" for="form8Example1">အမည်</label>
                            </div>
                            <!-- phone input -->
                            <div class="form-outline mb-2">
                                <input type="tel" id="form8Example1" class="form-control" />
                                <label class="form-label" for="form8Example1">ဖုန်းနံပါတ်</label>
                            </div>
                            <!-- Default radio -->
                            <label for="" class="mb-1">ဆုတောင်းချက်ရွေးချယ်ပါ။</label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                <label class="form-check-label" for="flexRadioDefault1">ဆုတောင်းချက်</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                <label class="form-check-label" for="flexRadioDefault1">ကျေးဇူးတော်ချီးမွမ်း</label>
                            </div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>အရေးကြီးသောဆုတောင်းချက်</option>
                                <option value="1">ဟုတ်ပါသည်</option>
                                <option value="2">မဟုတ်ပါ</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="py-form">
                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="form4Example3" rows="15"></textarea>
                                <label class="form-label" for="form4Example3">ဆုတောင်းချက်များရေးရန်</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="botn botn-py"  type="submit">Send</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-userlayout>