@extends('pages.layout.app')
@section('content')

    <div class="home-hero container">
        <div class="col content"><p class="title"><span>Real estate</span> investing that’s accessible – for <span>everyone</span>.
            </p>
            <p class="subtitle">And it’s easy too!</p> <a href="{{ route('how_it_works') }}" class="btn">How It Works</a>
        </div>
        <div class="col image">
            <lottie-player src="https://lottie.host/98899da5-201f-4c08-b7c9-be071961ea81/2a2tFx119D.json" speed="1"
                           autoplay></lottie-player>
        </div>
    </div>
    <div class="home-noexperience">
        <div class="container"><p class="title">From the <span>convenience</span> of your phone</p>
            <p class="description">Whether you’re a current investor or just taking the first steps to building a
                balanced portfolio, {{ env('APP_NAME') }} provides the tools and guidance you need to begin investing in private
                market assets. We’ve broken down the barriers that used to keep the everyday investor from
                institutional-quality investments.</p>
            <svg width="23" height="23" viewbox="0 0 23 23" fill="none">
                <path d="M1 11L11.5 21.5L22 11" stroke="#1B3BE4" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                <path d="M1 1L11.5 11.5L22 1" stroke="#1B3BE4" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </svg>
            <div class="title2">You no longer need:</div>
            <ul>
                <li>
                    <svg width="132" height="141" viewbox="0 0 132 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M98.2054 10.8704H33.5967V13.463H98.2054V10.8704Z" fill="#1B3BE4"></path>
                        <path d="M98.2054 21.2407H33.5967V23.8333H98.2054V21.2407Z" fill="#1B3BE4"></path>
                        <path d="M98.2054 31.6111H33.5967V34.2037H98.2054V31.6111Z" fill="#1B3BE4"></path>
                        <path d="M98.2054 41.9814H33.5967V44.574H98.2054V41.9814Z" fill="#1B3BE4"></path>
                        <path d="M98.2054 52.3778H33.5967V54.9704H98.2054V52.3778Z" fill="#1B3BE4"></path>
                        <path d="M98.2054 62.7482H33.5967V65.3408H98.2054V62.7482Z" fill="#1B3BE4"></path>
                        <path
                            d="M51.7903 106.822H98.3086V104.23H52.9791C52.6528 105.124 52.2552 105.991 51.7903 106.822Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M98.2052 93.8593H54.1162C54.2204 94.7195 54.2722 95.5853 54.2713 96.4518H98.2052V93.8593Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M98.2052 83.4889H50.3948C50.9451 84.3178 51.4373 85.1841 51.8679 86.0815H98.2052V83.4889Z"
                            fill="#1B3BE4"></path>
                        <path d="M33.5967 73.248C36.4244 73.5897 39.161 74.4696 41.6598 75.8406H98.2054V73.248H33.5967Z"
                              fill="#1B3BE4"></path>
                        <path
                            d="M111.127 124.944V12.1667C111.12 9.07458 109.893 6.11106 107.713 3.92461C105.534 1.73817 102.58 0.506849 99.4974 0.5H10.3374C7.50206 0.812264 4.8807 2.16125 2.97388 4.28936C1.06706 6.41746 0.00837597 9.17561 0 12.0371V15.926H20.6748V75.4C21.5115 74.988 22.3749 74.633 23.2591 74.3372V12.1149C23.2596 10.3753 22.8723 8.65755 22.1256 7.0875C21.3788 5.51746 20.2915 4.13487 18.9433 3.04085H99.4974C101.896 3.04085 104.197 3.99676 105.893 5.69848C107.59 7.4002 108.543 9.70833 108.543 12.1149V124.893H41.3496V128.782C41.3496 131.188 40.3966 133.496 38.7003 135.198C37.004 136.9 34.7033 137.856 32.3044 137.856C29.9054 137.856 27.6047 136.9 25.9084 135.198C24.2121 133.496 23.2591 131.188 23.2591 128.782V118.411C22.3749 118.115 21.5115 117.76 20.6748 117.348V128.782C20.6816 131.874 21.9091 134.837 24.0886 137.023C26.268 139.21 29.2221 140.441 32.3044 140.448H120.172C123.254 140.441 126.209 139.21 128.388 137.023C130.568 134.837 131.795 131.874 131.802 128.782V124.893L111.127 124.944ZM20.6748 12.1667V13.463H2.58435V12.1667C2.59203 9.87305 3.46523 7.66748 5.02831 5.99359C6.59139 4.31971 8.72836 3.30176 11.0093 3.1445C15.9454 3.48153 20.6748 7.37037 20.6748 12.1667ZM129.217 128.833C129.217 131.24 128.265 133.548 126.568 135.25C124.872 136.952 122.571 137.907 120.172 137.907H39.6181C40.9663 136.813 42.0536 135.431 42.8004 133.861C43.5471 132.291 43.9344 130.573 43.9339 128.833V127.537H129.217V128.833Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M51.687 96.4258C51.687 92.3237 50.4745 88.3138 48.2027 84.903C45.9309 81.4922 42.7019 78.8338 38.9241 77.264C35.1463 75.6942 30.9893 75.2834 26.9787 76.0837C22.9682 76.884 19.2843 78.8593 16.3929 81.7599C13.5015 84.6606 11.5324 88.3562 10.7347 92.3795C9.93693 96.4028 10.3464 100.573 11.9112 104.363C13.476 108.153 16.1259 111.392 19.5259 113.671C22.9259 115.95 26.9231 117.167 31.0122 117.167C36.4955 117.167 41.7542 114.981 45.6315 111.092C49.5088 107.202 51.687 101.927 51.687 96.4258ZM12.9218 96.4258C12.9218 92.8365 13.9828 89.3278 15.9706 86.3433C17.9584 83.3589 20.7837 81.0327 24.0893 79.6591C27.3949 78.2855 31.0323 77.9262 34.5415 78.6265C38.0507 79.3267 41.2741 81.0552 43.8041 83.5933C46.3341 86.1313 48.057 89.365 48.755 92.8854C49.4531 96.4058 49.0948 100.055 47.7256 103.371C46.3564 106.687 44.0377 109.521 41.0627 111.516C38.0878 113.51 34.5902 114.574 31.0122 114.574C26.2143 114.574 21.6129 112.662 18.2203 109.259C14.8277 105.855 12.9218 101.239 12.9218 96.4258Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M31.9425 106.511V103.919C33.1043 103.829 34.1915 103.31 34.9936 102.462C35.7958 101.614 36.2556 100.498 36.2842 99.3296C36.2842 97.0481 34.992 95.6482 32.1234 94.5853C29.9526 93.7038 29.0222 93.1075 29.0222 91.9927C29.0222 90.8779 29.6683 90.2038 31.4515 90.2038C32.6395 90.1869 33.8155 90.4441 34.8887 90.9556L35.5865 88.5705C34.4779 88.0464 33.2712 87.7636 32.0459 87.7408V85.3297H29.9526V87.9223C28.8437 87.9939 27.8025 88.4818 27.0362 89.289C26.2699 90.0962 25.8348 91.1633 25.8176 92.2778C25.8176 94.689 27.5491 95.9074 30.2369 96.8926C32.1493 97.5926 33.0538 98.3185 33.0538 99.4852C33.0538 100.652 31.9425 101.507 30.3144 101.507C28.9129 101.495 27.5397 101.11 26.3345 100.393L25.6367 102.804C26.8952 103.532 28.3189 103.925 29.7717 103.945V106.537L31.9425 106.511Z"
                            fill="#1B3BE4"></path>
                    </svg>
                    Experience
                </li>
                <li>
                    <svg width="132" height="141" viewbox="0 0 132 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100.646 70.5C94.4485 70.5204 88.4043 72.4228 83.3204 75.9533C78.2366 79.4838 74.355 84.4744 72.1938 90.2591L71.6027 91.85L63.6149 88.4296L60.3079 78.4545L61.6818 77.8818C66.5967 75.8162 70.7918 72.355 73.7437 67.93C76.6956 63.5051 78.2735 58.3124 78.2805 53V34.3068L83.6802 23.5045C84.4586 22.0417 84.7229 20.3616 84.4311 18.7318C82.4661 8.16818 68.4555 0.5 51.1219 0.5C33.7884 0.5 19.7778 8.15227 17.7968 18.7C17.5148 20.3299 17.7786 22.0069 18.5477 23.4727L23.9634 34.2909V53C23.9618 58.3286 25.5409 63.539 28.5025 67.977C31.4641 72.415 35.6762 75.883 40.61 77.9455L41.9839 78.5182L38.6769 88.3659L28.133 92.8682H27.8774C12.2373 94.0614 0 106.598 0 121.377V132.514C0 134.623 0.84157 136.647 2.33957 138.138C3.83758 139.63 5.86931 140.468 7.9878 140.468H94.2561C96.3746 140.468 98.4063 139.63 99.9043 138.138C101.402 136.647 102.244 134.623 102.244 132.514V130.955L103.682 130.811C111.447 130.056 118.622 126.353 123.718 120.469C128.813 114.586 131.438 106.974 131.048 99.2141C130.657 91.4543 127.281 84.1422 121.62 78.7954C115.959 73.4487 108.448 70.4781 100.646 70.5ZM70.8678 94.9841L70.5802 96.7659C70.5802 97.0841 70.4844 97.3864 70.4524 97.7045C70.3443 98.7085 70.291 99.7176 70.2927 100.727C70.2998 102.101 70.4066 103.473 70.6122 104.832L70.9956 107.648L53.9177 100.186L62.6883 91.5636L70.8678 94.9841ZM21.3434 22.0568C20.8997 21.2345 20.7318 20.2924 20.8641 19.3682C22.4617 10.5386 35.7374 3.68182 51.058 3.68182C66.3787 3.68182 79.6384 10.5545 81.236 19.3205C81.3886 20.2896 81.2085 21.2818 80.7247 22.1364L76.0758 31.4114L74.686 30.7273C72.0985 29.4286 69.1806 28.9286 66.306 29.2914C63.4314 29.6542 60.731 30.8632 58.5506 32.7636C56.4847 34.5489 53.8413 35.5319 51.106 35.5319C48.3707 35.5319 45.7272 34.5489 43.6613 32.7636C41.4803 30.8704 38.7831 29.6658 35.9128 29.3032C33.0424 28.9406 30.1286 29.4363 27.542 30.7273L26.1041 31.4432L21.3434 22.0568ZM41.4887 74.875C37.2146 73.0174 33.5777 69.9583 31.0238 66.0728C28.4699 62.1872 27.1099 57.6439 27.1106 53V34.6409L27.8455 34.1636C29.9112 32.8422 32.35 32.2198 34.7993 32.3889C37.2487 32.558 39.5779 33.5096 41.4407 35.1023C44.1059 37.3899 47.5075 38.6483 51.0261 38.6483C54.5447 38.6483 57.9463 37.3899 60.6115 35.1023C62.4775 33.5045 64.8113 32.5487 67.2663 32.3767C69.7212 32.2047 72.1664 32.8258 74.2387 34.1477L74.9735 34.625V53C74.9711 57.6412 73.6097 62.181 71.056 66.0635C68.5022 69.946 64.867 73.0026 60.5955 74.8591C58.6288 75.714 56.5541 76.2975 54.4289 76.5932C52.148 76.9539 49.8243 76.9539 47.5434 76.5932C45.4811 76.2771 43.4678 75.6997 41.5526 74.875H41.4887ZM45.0033 79.3773L46.3612 79.6159C49.4707 80.1958 52.6613 80.1958 55.7709 79.6159L57.1288 79.3773L60.4038 89.1614L51.0261 98.5159L41.7762 89.225L45.0033 79.3773ZM30.1779 95.5091L39.5396 91.4205L48.3582 100.202L27.6698 109.207L30.1779 95.5091ZM28.804 137.318H8.03573C6.76463 137.318 5.5456 136.815 4.64679 135.92C3.74799 135.025 3.24305 133.811 3.24305 132.545V121.409C3.24305 109.605 12.1734 99.1364 24.4906 96.575L26.8071 96.0977L23.9794 111.577C23.9714 111.683 23.9714 111.79 23.9794 111.895C23.9794 112.317 24.1477 112.722 24.4473 113.02C24.7469 113.319 25.1532 113.486 25.577 113.486C25.7929 113.486 26.0059 113.437 26.2 113.343L51.1379 102.477L72.4174 111.752L72.673 112.341C73.6507 114.674 74.9172 116.876 76.4433 118.895L78.3284 121.409H20.8162C20.3925 121.409 19.9862 121.577 19.6866 121.875C19.387 122.173 19.2187 122.578 19.2187 123C19.2187 123.422 19.387 123.827 19.6866 124.125C19.9862 124.423 20.3925 124.591 20.8162 124.591H35.6895L33.3091 127.248C31.0898 129.703 29.621 132.739 29.0756 135.998L28.804 137.318ZM99.0967 132.545C99.0967 133.811 98.5918 135.025 97.693 135.92C96.7942 136.815 95.5751 137.318 94.304 137.318H31.9991L32.5104 135.33C33.3028 132.273 35.0874 129.563 37.5865 127.621C40.0857 125.679 43.1593 124.613 46.3293 124.591H82.0188L82.4501 124.909C86.8676 128.216 92.1116 130.252 97.611 130.795L99.0488 130.939L99.0967 132.545ZM104.081 127.534L102.244 127.773C101.183 127.908 100.109 127.908 99.0488 127.773L97.2595 127.55C90.6968 126.729 84.6607 123.55 80.284 118.612C75.9072 113.673 73.4906 107.314 73.4878 100.727C73.4914 99.6639 73.5554 98.6016 73.6795 97.5455C73.8911 95.7833 74.2764 94.0461 74.8298 92.3591C74.9895 91.8818 75.1493 91.4205 75.325 90.9591C77.0965 86.4106 80.0706 82.4239 83.9321 79.4215C87.7936 76.4192 92.3987 74.5128 97.2595 73.9045L99.0488 73.6818H102.244L104.033 73.9045C110.554 74.773 116.537 77.9694 120.87 82.8998C125.203 87.8302 127.592 94.1594 127.592 100.711C127.592 107.263 125.203 113.593 120.87 118.523C116.537 123.453 110.554 126.65 104.033 127.518L104.081 127.534Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M103.841 99.1364H97.4512C96.1801 99.1364 94.961 98.6336 94.0622 97.7385C93.1634 96.8434 92.6585 95.6295 92.6585 94.3637C92.6585 93.0979 93.1634 91.8839 94.0622 90.9888C94.961 90.0938 96.1801 89.5909 97.4512 89.5909H107.037C107.46 89.5909 107.867 89.4233 108.166 89.125C108.466 88.8266 108.634 88.422 108.634 88C108.634 87.5781 108.466 87.1734 108.166 86.8751C107.867 86.5767 107.46 86.4091 107.037 86.4091H102.611V81.0796C102.611 80.7209 102.468 80.377 102.214 80.1234C101.959 79.8698 101.614 79.7273 101.253 79.7273C100.893 79.7273 100.548 79.8698 100.293 80.1234C100.039 80.377 99.8955 80.7209 99.8955 81.0796V86.4091H97.4512C95.3327 86.4091 93.301 87.2472 91.8029 88.7389C90.3049 90.2307 89.4634 92.254 89.4634 94.3637C89.4634 96.4733 90.3049 98.4966 91.8029 99.9884C93.301 101.48 95.3327 102.318 97.4512 102.318H103.841C105.113 102.318 106.332 102.821 107.23 103.716C108.129 104.611 108.634 105.825 108.634 107.091C108.634 108.357 108.129 109.571 107.23 110.466C106.332 111.361 105.113 111.864 103.841 111.864H94.2561C93.8324 111.864 93.426 112.031 93.1264 112.33C92.8268 112.628 92.6585 113.033 92.6585 113.455C92.6585 113.877 92.8268 114.281 93.1264 114.58C93.426 114.878 93.8324 115.045 94.2561 115.045H99.8955V120.184C99.8955 120.543 100.039 120.887 100.293 121.14C100.548 121.394 100.893 121.536 101.253 121.536C101.614 121.536 101.959 121.394 102.214 121.14C102.468 120.887 102.611 120.543 102.611 120.184V115.045H103.841C105.96 115.045 107.992 114.207 109.49 112.716C110.988 111.224 111.829 109.201 111.829 107.091C111.829 104.981 110.988 102.958 109.49 101.466C107.992 99.9744 105.96 99.1364 103.841 99.1364Z"
                            fill="#1B3BE4"></path>
                    </svg>
                    A Broker
                </li>
                <li>
                    <svg width="129" height="141" viewbox="0 0 129 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M95.4211 137.907H33.5264V140.5H95.4211V137.907Z" fill="#1B3BE4"></path>
                        <path d="M95.4211 132.722H33.5264V135.315H95.4211V132.722Z" fill="#1B3BE4"></path>
                        <path d="M95.4211 127.537H33.5264V130.13H95.4211V127.537Z" fill="#1B3BE4"></path>
                        <path d="M95.4211 122.352H33.5264V124.944H95.4211V122.352Z" fill="#1B3BE4"></path>
                        <path d="M95.4211 117.167H33.5264V119.759H95.4211V117.167Z" fill="#1B3BE4"></path>
                        <path
                            d="M125.208 41.9815L108.445 8.27783H90.8565C91.7333 9.10746 92.5844 9.96302 93.4354 10.8704H106.923L122.397 41.9815H6.75702L22.2307 10.8704H35.7186C36.5181 9.96302 37.3691 9.10746 38.2975 8.27783H20.6833L3.92018 41.9815H0.0517578V44.5741H128.999V41.9815H125.208Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M118.632 106.796V111.982H105.737V106.796H118.632ZM118.632 104.204H105.737C105.053 104.204 104.397 104.477 103.913 104.963C103.43 105.449 103.158 106.109 103.158 106.796V111.982H100.579V114.574H123.79V111.982H121.211V106.796C121.211 106.109 120.939 105.449 120.455 104.963C119.972 104.477 119.316 104.204 118.632 104.204Z"
                            fill="#1B3BE4"></path>
                        <path d="M118.632 57.537H116.053V104.204H118.632V57.537Z" fill="#1B3BE4"></path>
                        <path d="M108.316 57.537H105.737V104.204H108.316V57.537Z" fill="#1B3BE4"></path>
                        <path
                            d="M118.632 49.7593V54.9445H105.737V49.7593H118.632ZM123.79 47.1667H100.579V49.7593H103.158V54.9445C103.158 55.6321 103.43 56.2915 103.913 56.7777C104.397 57.2639 105.053 57.5371 105.737 57.5371H118.632C119.316 57.5371 119.972 57.2639 120.455 56.7777C120.939 56.2915 121.211 55.6321 121.211 54.9445V49.7593H123.79V47.1667Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M90.2631 106.796V111.982H77.3683V106.796H90.2631ZM90.2631 104.204H77.3683C76.6844 104.204 76.0284 104.477 75.5448 104.963C75.0611 105.449 74.7894 106.109 74.7894 106.796V111.982H72.2104V114.574H95.421V111.982H92.842V106.796C92.842 106.109 92.5703 105.449 92.0867 104.963C91.603 104.477 90.9471 104.204 90.2631 104.204Z"
                            fill="#1B3BE4"></path>
                        <path d="M90.263 57.537H87.6841V104.204H90.263V57.537Z" fill="#1B3BE4"></path>
                        <path d="M79.9476 57.537H77.3687V104.204H79.9476V57.537Z" fill="#1B3BE4"></path>
                        <path
                            d="M90.2631 49.7593V54.9445H77.3683V49.7593H90.2631ZM95.421 47.1667H72.2104V49.7593H74.7894V54.9445C74.7894 55.6321 75.0611 56.2915 75.5448 56.7777C76.0284 57.2639 76.6844 57.5371 77.3683 57.5371H90.2631C90.9471 57.5371 91.603 57.2639 92.0867 56.7777C92.5703 56.2915 92.842 55.6321 92.842 54.9445V49.7593H95.421V47.1667Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M51.579 106.796V111.982H38.6843V106.796H51.579ZM51.579 104.204H38.6843C38.0003 104.204 37.3443 104.477 36.8607 104.963C36.377 105.449 36.1053 106.109 36.1053 106.796V111.982H33.5264V114.574H56.7369V111.982H54.1579V106.796C54.1579 106.109 53.8862 105.449 53.4026 104.963C52.9189 104.477 52.263 104.204 51.579 104.204Z"
                            fill="#1B3BE4"></path>
                        <path d="M51.5789 57.537H49V104.204H51.5789V57.537Z" fill="#1B3BE4"></path>
                        <path d="M41.263 57.537H38.6841V104.204H41.263V57.537Z" fill="#1B3BE4"></path>
                        <path
                            d="M51.579 49.7593V54.9445H38.6843V49.7593H51.579ZM56.7369 47.1667H33.5264V49.7593H36.1053V54.9445C36.1053 55.6321 36.377 56.2915 36.8607 56.7777C37.3443 57.2639 38.0003 57.5371 38.6843 57.5371H51.579C52.263 57.5371 52.9189 57.2639 53.4026 56.7777C53.8862 56.2915 54.1579 55.6321 54.1579 54.9445V49.7593H56.7369V47.1667Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M23.2103 106.796V111.982H10.3156V106.796H23.2103ZM23.2103 104.204H10.3156C9.63163 104.204 8.97566 104.477 8.49202 104.963C8.00837 105.449 7.73666 106.109 7.73666 106.796V111.982H5.15771V114.574H28.3683V111.982H25.7893V106.796C25.7893 106.109 25.5176 105.449 25.034 104.963C24.5503 104.477 23.8943 104.204 23.2103 104.204Z"
                            fill="#1B3BE4"></path>
                        <path d="M23.2103 57.537H20.6313V104.204H23.2103V57.537Z" fill="#1B3BE4"></path>
                        <path d="M12.8949 57.537H10.3159V104.204H12.8949V57.537Z" fill="#1B3BE4"></path>
                        <path
                            d="M23.2103 49.7593V54.9445H10.3156V49.7593H23.2103ZM28.3683 47.1667H5.15771V49.7593H7.73666V54.9445C7.73666 55.6321 8.00837 56.2915 8.49202 56.7777C8.97566 57.2639 9.63163 57.5371 10.3156 57.5371H23.2103C23.8943 57.5371 24.5503 57.2639 25.034 56.7777C25.5176 56.2915 25.7893 55.6321 25.7893 54.9445V49.7593H28.3683V47.1667Z"
                            fill="#1B3BE4"></path>
                        <path d="M128.947 117.167H98V140.5H128.947V117.167Z" fill="#1B3BE4"></path>
                        <path d="M126.369 119.759H100.579V137.907H126.369V119.759Z" fill="white"></path>
                        <path
                            d="M121.21 124.945V132.722H105.737V124.945H121.21ZM123.789 122.352H103.158V135.315H123.789V122.352Z"
                            fill="#1B3BE4"></path>
                        <path d="M30.9474 117.167H0V140.5H30.9474V117.167Z" fill="#1B3BE4"></path>
                        <path d="M28.3686 119.759H2.5791V137.907H28.3686V119.759Z" fill="white"></path>
                        <path
                            d="M23.2103 124.945V132.722H7.73666V124.945H23.2103ZM25.7893 122.352H5.15771V135.315H25.7893V122.352Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M100.579 36.7963C100.579 27.1699 96.7749 17.9378 90.0039 11.1309C83.2328 4.32406 74.0493 0.5 64.4736 0.5C54.8979 0.5 45.7144 4.32406 38.9433 11.1309C32.1723 17.9378 28.3684 27.1699 28.3684 36.7963H23.2104V39.3889H105.737V36.7963H100.579ZM64.4736 3.09259C73.3654 3.09259 81.8929 6.6435 88.1803 12.9642C94.4677 19.2848 97.9999 27.8575 97.9999 36.7963H30.9473C30.9473 27.8575 34.4795 19.2848 40.7669 12.9642C47.0543 6.6435 55.5819 3.09259 64.4736 3.09259Z"
                            fill="#1B3BE4"></path>
                        <path
                            d="M65.8921 18.5185H62.4363C61.7523 18.5185 61.0964 18.2454 60.6127 17.7592C60.1291 17.273 59.8574 16.6135 59.8574 15.9259C59.8574 15.2383 60.1291 14.5789 60.6127 14.0927C61.0964 13.6065 61.7523 13.3333 62.4363 13.3333H67.5942C67.8224 13.3334 68.0416 13.2441 68.2053 13.0844C68.369 12.9246 68.4644 12.707 68.4711 12.4778C68.4711 12.244 68.3787 12.0198 68.2142 11.8545C68.0498 11.6891 67.8268 11.5963 67.5942 11.5963H65.1958V8.64074C65.1894 8.45026 65.1112 8.26935 64.9772 8.13459C64.8431 7.99983 64.6632 7.92126 64.4737 7.9148C64.2797 7.91468 64.0933 7.99033 63.9538 8.12577C63.8142 8.26121 63.7325 8.44586 63.7258 8.64074V11.5444H62.4105C61.277 11.5714 60.1986 12.0413 59.4041 12.8546C58.6096 13.6678 58.1617 14.7602 58.1553 15.9C58.162 17.0531 58.6207 18.157 59.4318 18.9723C60.2428 19.7877 61.3409 20.2487 62.4879 20.2555H65.8921C66.5761 20.2555 67.2321 20.5287 67.7157 21.0149C68.1994 21.5011 68.4711 22.1605 68.4711 22.8481C68.4711 23.5357 68.1994 24.1952 67.7157 24.6814C67.2321 25.1676 66.5761 25.4407 65.8921 25.4407H60.7342C60.5061 25.4406 60.2869 25.5299 60.1231 25.6897C59.9594 25.8494 59.8641 26.067 59.8574 26.2963C59.8574 26.412 59.8801 26.5267 59.9241 26.6336C59.9682 26.7406 60.0328 26.8377 60.1142 26.9196C60.1956 27.0014 60.2923 27.0664 60.3987 27.1107C60.5051 27.155 60.6191 27.1778 60.7342 27.1778H63.7774V29.9778C63.7773 30.0753 63.7968 30.1719 63.8347 30.2617C63.8726 30.3515 63.9281 30.4327 63.9979 30.5005C64.0677 30.5682 64.1504 30.6211 64.241 30.6561C64.3316 30.691 64.4283 30.7072 64.5253 30.7037C64.7168 30.7037 64.9005 30.6272 65.0359 30.4911C65.1713 30.3549 65.2474 30.1703 65.2474 29.9778V27.2037H65.8921C67.0391 27.1969 68.1372 26.7358 68.9483 25.9205C69.7593 25.1051 70.218 24.0012 70.2247 22.8481C70.2179 21.6975 69.7585 20.5963 68.9467 19.785C68.1349 18.9738 67.0367 18.5185 65.8921 18.5185Z"
                            fill="#1B3BE4"></path>
                    </svg>
                    Millions in the Bank
                </li>
            </ul>
        </div>
    </div>
    <div class="home-download container">
        <div class="image"><img
                nitro-lazy-src="https://cdn-fiiij.nitrocdn.com/yWNxOhTOUCABTanWOzXhJAIrPGprxXkC/assets/images/optimized/rev-6b43058/diversyfund.com/wp-content/themes/diversyfund2.0/images/homepage/download_iphones.png"
                class="nitro-lazy" decoding="async" nitro-lazy-empty id="MjY3OjExMw==-1"
                src="data:image/svg+xml;nitro-empty-id=MjY3OjExMw==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTIzMiAxMTEwIiB3aWR0aD0iMTIzMiIgaGVpZ2h0PSIxMTEwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg=="/>
        </div>
        <div class="content">
            <div class="title-wrap"><p class="title">All-Access Investing</p>
                <p class="subtitle">Mobile or web, our platform makes it easy to:</p></div>
            <ul class="features">
                <li>Track your real estate investment.</li>
                <li>Set up Auto-Invest to reach your investment goals even faster.</li>
                <li>Grow your real estate knowledge as you grow your portfolio.</li>
            </ul>

        </div>
    </div>
    <div class="home-banner">
        <div class="container banner"><img alt=""
                                           nitro-lazy-src="https://cdn-fiiij.nitrocdn.com/yWNxOhTOUCABTanWOzXhJAIrPGprxXkC/assets/images/optimized/rev-6b43058/diversyfund.com/wp-content/themes/diversyfund2.0/images/banner_building.png"
                                           class="image nitro-lazy" decoding="async" nitro-lazy-empty
                                           id="Mjg5OjEyNA==-1"
                                           src="data:image/svg+xml;nitro-empty-id=Mjg5OjEyNA==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDY2IDc5MCIgd2lkdGg9IjQ2NiIgaGVpZ2h0PSI3OTAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+"/>
            <div class="content"><p class="title">We are the global leader in commercial real estate services and investments</p>
                <p class="subtitle">With services, insights and data that span every dimension of the industry,
                    we create solutions for clients of every size, in every sector and across every geography.</p></div>
        </div>
    </div>
    <div class="home-trust container"><img alt=""
                                           nitro-lazy-src="https://cdn-fiiij.nitrocdn.com/yWNxOhTOUCABTanWOzXhJAIrPGprxXkC/assets/images/optimized/rev-6b43058/diversyfund.com/wp-content/themes/diversyfund2.0/images/homepage/city.jpg"
                                           class="image nitro-lazy" decoding="async" nitro-lazy-empty
                                           id="Mjk5OjExOA==-1"
                                           src="data:image/svg+xml;nitro-empty-id=Mjk5OjExOA==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjE4NCAxMDA1IiB3aWR0aD0iMjE4NCIgaGVpZ2h0PSIxMDA1IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg=="/>
        <p class="title">With a Partner You Can <span>Trust</span></p>
        <p class="description">We’re here to help demystify the real estate investment process with an in-house team of
            experts that handle the portfolio through each phase, from acquiring properties to appreciation through
            renovations, property management, and liquidation. We’ve harnessed the power of fintech to offer a simple
            hands-off approach to commercial real estate. </p>
    </div>
    <div class="home-stats container">
        <div class="image">
            <lottie-player src="https://lottie.host/d2df71de-0df2-47f3-a6fe-c7dad72f67f9/5oL54rUDgd.json" speed="1"
                           class="lottie-on-scroll"></lottie-player>
        </div>
        <div class="content"><p class="title">And You <span>Don’t </span> Have to Do it Alone.</p>
            <p class="description">Join our fast-growing community of 28,000+ investors! Together, our multifamily real
                estate investors are adding the power of alternative assets to their portfolios and learning along the
                way — with content designed to educate and take the mystery out of securing their financial future. </p>
            <ul class="stats">
                <li><span>23</span>Assets</li>
                <li><span>$175 M</span> of current estimated market value*</li>
                <li><span>1M sq. ft.</span> of rentable square footage</li>
                <li><span>Across 6 States</span> CA, FL, NC, SC, TX, UT</li>
                <li>A varied community of <span>Over 300K</span> and growing</li>
            </ul>
        </div>
    </div>
    <div class="home-image-tiles">
        <div class="img"><img alt=""
                              nitro-lazy-src="https://cdn-fiiij.nitrocdn.com/yWNxOhTOUCABTanWOzXhJAIrPGprxXkC/assets/images/optimized/rev-6b43058/diversyfund.com/wp-content/themes/diversyfund2.0/images/row1.png"
                              class="nitro-lazy" decoding="async" nitro-lazy-empty id="MzI2OjExMg==-1"
                              src="data:image/svg+xml;nitro-empty-id=MzI2OjExMg==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMzE4IDQ4OSIgd2lkdGg9IjMxOCIgaGVpZ2h0PSI0ODkiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+"/>
        </div>
        <div class="img"><img alt=""
                              nitro-lazy-src="https://cdn-fiiij.nitrocdn.com/yWNxOhTOUCABTanWOzXhJAIrPGprxXkC/assets/images/optimized/rev-6b43058/diversyfund.com/wp-content/themes/diversyfund2.0/images/row2.png"
                              class="nitro-lazy" decoding="async" nitro-lazy-empty id="MzI3OjExMg==-1"
                              src="data:image/svg+xml;nitro-empty-id=MzI3OjExMg==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMzE4IDQ4OSIgd2lkdGg9IjMxOCIgaGVpZ2h0PSI0ODkiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+"/>
        </div>
        <div class="img"><img alt=""
                              nitro-lazy-src="https://cdn-fiiij.nitrocdn.com/yWNxOhTOUCABTanWOzXhJAIrPGprxXkC/assets/images/optimized/rev-6b43058/diversyfund.com/wp-content/themes/diversyfund2.0/images/row3.png"
                              class="nitro-lazy" decoding="async" nitro-lazy-empty id="MzI4OjExMg==-1"
                              src="data:image/svg+xml;nitro-empty-id=MzI4OjExMg==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMzE4IDQ4OSIgd2lkdGg9IjMxOCIgaGVpZ2h0PSI0ODkiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+"/>
        </div>
        <div class="img"><img alt=""
                              nitro-lazy-src="https://cdn-fiiij.nitrocdn.com/yWNxOhTOUCABTanWOzXhJAIrPGprxXkC/assets/images/optimized/rev-6b43058/diversyfund.com/wp-content/themes/diversyfund2.0/images/row4.png"
                              class="nitro-lazy" decoding="async" nitro-lazy-empty id="MzI5OjExMg==-1"
                              src="data:image/svg+xml;nitro-empty-id=MzI5OjExMg==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMzE4IDQ4OSIgd2lkdGg9IjMxOCIgaGVpZ2h0PSI0ODkiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+"/>
        </div>
    </div>
    <script nitro-exclude>(function () {
            var e = [];
            var a = {};
            var r = null;
            var i = {
                enabled: true,
                observeSelectors: ['[class*="slider"]', '[id*="slider"]', ".fotorama", ".esg-grid"],
                attributes: ["src", "data-src"],
                attributeRegex: /^data:image\/.*?;nitro-empty-id=([^;]*);base64/,
                cssUrlFuncRegex: /^url\(['|"]data:image\/.*?;nitro-empty-id=([^;]*);base64/
            };
            var l = function (t) {
                setTimeout(t, 0)
            };
            var t = function () {
                document.querySelectorAll("[nitro-lazy-empty]").forEach(function (t) {
                    let e = t.getAttribute("nitro-lazy-src");
                    let r = t.getAttribute("id");
                    if (r && e) {
                        a[r] = e
                    }
                });
                r = new MutationObserver(n);
                let e = document.querySelectorAll(i.observeSelectors.join(","));
                for (let t = 0; t < e.length; ++t) {
                    r.observe(e[t], {
                        subtree: true,
                        childList: true,
                        attributes: true,
                        attributeFilter: i.attributes,
                        characterData: false,
                        attributeOldValue: false,
                        characterDataOldValue: false
                    })
                }
            };
            var n = function (a) {
                for (let r = 0; r < a.length; ++r) {
                    switch (a[r].type) {
                        case"attributes":
                            let t = a[r].target.getAttribute(a[r].attributeName);
                            if (!t) break;
                            let e = i.attributeRegex.exec(t);
                            if (e && e[1]) {
                                a[r].target.setAttribute("nitro-lazy-" + a[r].attributeName, u(e[1]));
                                if (a[r].target.className.indexOf("nitro-lazy") < 0) {
                                    a[r].target.className += " nitro-lazy"
                                }
                            }
                            break;
                        case"childList":
                            if (a[r].addedNodes.length > 0) {
                                for (let e = 0; e < a[r].addedNodes.length; ++e) {
                                    let t = a[r].addedNodes[e];
                                    l(function (t) {
                                        return function () {
                                            s(t, true)
                                        }
                                    }(t))
                                }
                            }
                            break
                    }
                }
            };
            var s = function (a, t) {
                if (!(a instanceof HTMLElement)) return;
                if (e.indexOf(a) > -1) return;
                for (let r = 0; r < i.attributes.length; ++r) {
                    let e = a.getAttribute(i.attributes[r]);
                    if (e) {
                        let t = i.attributeRegex.exec(e);
                        if (t) {
                            a.setAttribute("nitro-lazy-" + i.attributes[r], u(t[1]));
                            if (a.className.indexOf("nitro-lazy") < 0) {
                                a.className += " nitro-lazy"
                            }
                        }
                    }
                }
                if (a.style.backgroundImage) {
                    let t = i.cssUrlFuncRegex.exec(a.style.backgroundImage);
                    if (t) {
                        a.setAttribute("nitro-lazy-bg", u(t[1]));
                        if (a.className.indexOf("nitro-lazy") < 0) {
                            a.className += " nitro-lazy"
                        }
                    }
                }
                e.push(a);
                if (t) {
                    a.querySelectorAll("*").forEach(function (t) {
                        l(function () {
                            s(t)
                        })
                    })
                }
            };

            function u(t) {
                return a[t]
            }

            if (i.enabled) {
                t()
            }
        })();
    </script>
    <div class="home-testimonials container">
        <div class="image">
            <lottie-player src="https://lottie.host/629ea989-8ab9-4fe6-bf25-753502901105/zurI172FAX.json" speed="1"
                           class="lottie-on-scroll"></lottie-player>
        </div>
        <div class="content"><p class="title">Inclusive Access to Exclusive <span>Deals</span></p>
            <p class="description">At {{ env('APP_NAME') }}, our real estate growth plan offers access to everyone, from those
                just starting out to seasoned investors looking to leverage their portfolios. Value-add strategies and a
                multifamily asset class provide an inflation-resistant way to help build potential wealth. </p>
            <blockquote><p>Ninety percent of all millionaires become so through owning real estate.</p> <cite>- Andrew
                    Carnegie</cite></blockquote>
            <p class="description">Carnegie was right. In fact, 24 of the 400 billionaires appearing on the 2021 Forbes
                400 list of richest Americans are real estate investors. They realize the powerful benefits of a
                diversified portfolio and prudent investing. </p> <a href="{{ route('about') }}" class="btn">Learn More</a>
        </div>
    </div>
    <div class="home-featured">
        <div class="container"><p class="title">Featured On</p>
            <ul>
                <li>
                    <svg width="177" height="55" viewbox="0 0 177 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M38.5351 29.4828V29.4213C38.5351 24.7523 42.1735 20.6944 47.5673 20.6944C51.2041 20.6944 53.7805 22.586 55.0521 25.3018L50.1137 28.1092C49.537 27.0418 48.8106 26.4307 47.6902 26.4307C46.2342 26.4307 45.1422 27.7113 45.1422 29.3597V29.4213C45.1422 31.1597 46.2342 32.4102 47.5972 32.4102C48.8106 32.4102 49.5071 31.8007 50.1736 30.7334L55.1751 33.6007C53.6891 36.3781 51.1742 38.1481 47.2348 38.1481C42.2034 38.1481 38.5351 34.1502 38.5351 29.4828Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M56.2946 15.445H63.1728V23.2877C64.2349 21.914 65.902 20.6635 68.2341 20.6635C71.7197 20.6635 73.9021 22.9814 73.9021 26.7361V37.7208H67.024V28.964C67.024 27.5287 66.1746 26.7045 65.1425 26.7045C64.1135 26.7045 63.1728 27.5287 63.1728 28.964V37.7208H56.2946V15.445Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M75.4483 29.4828V29.4213C75.4483 24.4476 78.9953 20.6628 83.9652 20.6628C89.846 20.6628 92.572 24.7823 92.572 29.8476C92.572 30.2155 92.572 30.6418 92.5421 31.0081H81.9057C82.3895 32.4734 83.5414 33.236 85.0257 33.236C86.269 33.236 87.2996 32.6565 88.39 31.526L92.0883 34.4865C90.4511 36.6213 88.1174 38.1181 84.542 38.1181C79.1151 38.1181 75.4483 34.6697 75.4483 29.4828ZM86.299 27.956C86.1477 26.3692 85.2069 25.4534 83.9952 25.4534C82.8433 25.4534 82.0255 26.4307 81.8128 27.956H86.299Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M93.5281 29.5122V29.4522C93.5281 24.1722 96.6796 20.6638 100.589 20.6638C103.106 20.6638 104.5 21.7612 105.561 22.9517V15.4454H112.44V37.7212H105.561V35.6764C104.439 36.8969 103.165 38.1175 100.65 38.1175C96.6496 38.1175 93.5281 34.609 93.5281 29.5122ZM105.71 29.4206V29.359C105.71 27.7122 104.528 26.3701 102.953 26.3701C101.377 26.3701 100.195 27.6822 100.195 29.359V29.4206C100.195 31.099 101.377 32.4112 102.953 32.4112C104.528 32.4112 105.71 31.099 105.71 29.4206Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M114.165 29.5122V29.4522C114.165 24.1722 117.318 20.6638 121.226 20.6638C123.743 20.6638 125.137 21.7612 126.198 22.9517V15.4454H133.077V37.7212H126.198V35.6764C125.077 36.8969 123.802 38.1175 121.288 38.1175C117.287 38.1175 114.165 34.609 114.165 29.5122ZM126.349 29.4206V29.359C126.349 27.7122 125.165 26.3701 123.591 26.3701C122.014 26.3701 120.832 27.6822 120.832 29.359V29.4206C120.832 31.099 122.014 32.4112 123.591 32.4112C125.165 32.4112 126.349 31.099 126.349 29.4206Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M134.624 32.9908V32.9308C134.624 29.6039 137.079 27.7424 140.928 27.7424C142.323 27.7424 144.111 28.0471 144.836 28.3518V28.0787C144.836 26.5534 143.899 25.6676 141.776 25.6676C140.079 25.6676 138.656 26.0339 137.2 26.6134L135.988 22.006C137.897 21.2734 140.079 20.7855 142.958 20.7855C146.322 20.7855 148.506 21.4866 149.959 22.9518C151.202 24.2039 151.686 25.8208 151.686 28.2303V37.7213H144.808V36.0429C143.654 37.295 142.11 38.1176 140.049 38.1176C136.868 38.1176 134.624 36.2876 134.624 32.9908ZM144.899 31.5571V30.8545C144.505 30.7029 143.899 30.5813 143.324 30.5813C141.957 30.5813 141.201 31.4039 141.201 32.4413V32.5029C141.201 33.4803 141.897 34.1213 142.777 34.1213C143.989 34.1213 144.899 33.1439 144.899 31.5571Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M153.941 21.0599H160.819V24.4168C161.76 22.1589 163.275 20.6936 166.002 20.8152V28.1699H165.274C162.366 28.1699 160.819 29.7868 160.819 33.4799V37.721H153.941V21.0599Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M14.8787 33.2699C14.9764 31.8157 15.0804 30.2842 15.0804 30.1863C15.0804 30.0963 15.0252 28.1147 14.9653 26.032C13.2415 24.9363 12.8018 21.4231 14.8251 21.161V21.1531C14.8251 21.1531 13.9269 15.9836 13.8623 15.5794L13.2446 13.7068C12.8601 14.0336 12.3464 14.6857 11.932 15.3394C12.1826 15.5889 12.3638 15.911 12.411 15.9931C12.4378 16.0452 12.4536 16.102 12.4552 16.162C12.4756 17.0463 12.2897 17.6936 11.9036 18.0868C11.6326 18.3615 11.267 18.5068 10.8463 18.5068C10.7013 18.5068 10.5658 18.491 10.4476 18.4673L10.0017 19.6357C10.0569 20.272 10.2349 21.2384 10.4902 22.4178C11.0039 22.7794 11.7051 23.5705 11.0858 24.9726C12.2472 29.6952 14.0341 35.9399 14.989 39.2194L14.6975 35.9099C14.6975 35.9099 14.7038 35.8057 14.7148 35.6305C14.2247 34.841 14.1948 33.5652 14.8787 33.2699ZM30.6095 36.9031C30.4629 36.3884 30.1509 35.9652 29.8358 35.5452C28.758 34.8868 28.3451 34.0657 28.3451 34.0657C27.7416 32.3257 28.5893 31.4636 29.6561 31.0389C29.7538 30.8273 29.8515 30.6173 29.9382 30.4073C30.4881 29.051 30.1824 27.7136 29.9492 26.3178C29.6719 24.6331 29.497 22.9468 29.3 21.2494C29.1314 19.8078 29.6136 16.9547 28.4586 15.8589C27.5541 14.9999 25.6458 15.2542 24.4876 15.1468C22.841 14.9968 21.6844 16.162 19.981 16.162C18.5281 16.162 17.7009 15.5099 16.6199 14.7047C15.9612 14.212 14.4123 13.2094 13.481 13.6452C13.533 14.1694 14.1318 14.9778 14.283 15.4784C14.2909 15.5005 14.2956 15.5226 14.2988 15.5463C14.3603 15.9378 15.238 20.9873 15.2458 21.0378C15.2506 21.0631 15.2521 21.0868 15.2537 21.112V21.1531C15.3246 21.1594 15.394 21.1642 15.468 21.1768C16.8878 21.4105 18.4998 22.822 18.3406 24.3315C18.2524 25.1731 16.7491 26.4157 15.9029 26.3526C15.728 26.3384 15.561 26.302 15.4018 26.2452C15.457 28.1873 15.5058 29.9494 15.5058 30.0378C15.5058 30.1531 15.4018 31.7099 15.2994 33.2147C15.3388 33.2194 15.3798 33.2242 15.4239 33.232C16.1708 33.3805 17.0075 34.2236 16.9067 35.1047C16.8515 35.5957 16.0463 36.3094 15.6004 36.2636C15.4365 36.2478 15.2868 36.1894 15.1513 36.0978C15.2049 38.0194 14.7873 41.4631 17.1809 40.9989C18.079 40.8236 19.3475 40.7589 20.1512 40.2868C21.1912 39.6742 22.0137 38.8152 23.3153 38.8831C24.1756 38.9273 25.2661 40.1194 25.8586 40.0942C28.1387 40.001 31.4966 40.0026 30.6095 36.9031ZM28.6067 17.0415C28.8304 17.0415 29.0148 17.1805 29.0148 17.351C29.0148 17.5231 28.8304 17.662 28.6067 17.662C28.3798 17.662 28.1986 17.5231 28.1986 17.351C28.1986 17.1805 28.3798 17.0415 28.6067 17.0415ZM27.324 17.7978C27.9984 17.7978 28.5452 18.1594 28.5452 18.6047C28.5452 19.0515 27.9984 19.4131 27.324 19.4131C26.6512 19.4131 26.1028 19.0515 26.1028 18.6047C26.1028 18.1594 26.6512 17.7978 27.324 17.7978ZM24.787 19.2331C25.7435 19.2426 26.9458 20.0036 26.9963 21.0094C27.0262 21.5699 26.169 22.5378 25.6096 22.5836C23.8463 22.7242 22.6676 19.2157 24.787 19.2331ZM22.9923 28.4684C23.3657 28.4684 23.6683 28.7242 23.6683 29.0399C23.6683 29.3557 23.3657 29.6131 22.9923 29.6131C22.6188 29.6131 22.3163 29.3557 22.3163 29.0399C22.3163 28.7242 22.6188 28.4684 22.9923 28.4684ZM20.022 37.6231C17.589 37.8173 15.9612 32.9715 18.8874 32.9952C20.2079 33.0078 21.8687 34.0594 21.9381 35.4489C21.9806 36.2226 20.7972 37.5599 20.022 37.6231ZM21.6198 32.6763C21.6198 32.2026 22.1697 31.8189 22.8457 31.8189C23.5201 31.8189 24.0701 32.2026 24.0701 32.6763C24.0701 33.1515 23.5201 33.5352 22.8457 33.5352C22.1697 33.5352 21.6198 33.1515 21.6198 32.6763ZM23.8999 35.3384C23.4965 35.3384 23.1703 35.081 23.1703 34.7652C23.1703 34.4494 23.4965 34.1936 23.8999 34.1936C24.3033 34.1936 24.6295 34.4494 24.6295 34.7652C24.6295 35.081 24.3033 35.3384 23.8999 35.3384ZM26.0398 38.8989C25.2613 38.8989 24.6295 38.5247 24.6295 38.062C24.6295 37.5994 25.2613 37.2252 26.0398 37.2252C26.8182 37.2252 27.4516 37.5994 27.4516 38.062C27.4516 38.5247 26.8182 38.8989 26.0398 38.8989Z"
                              fill="white"></path>
                    </svg>
                </li>
                <li>
                    <svg width="177" height="55" viewbox="0 0 177 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M38.0197 31.9348V15.4739H32.823V31.2208C32.823 33.6723 30.7189 35.1333 27.7457 35.1333C24.3499 35.1333 22.4846 33.6723 22.4846 31.1895V15.4739H17.291V31.6364C17.291 37.1692 21.7067 39.377 27.6247 39.377C31.7089 39.377 35.001 38.2661 36.7186 36.0192V39.077H41.3543V34.2708H37.6504C37.8893 33.5661 38.0197 32.7879 38.0197 31.9348Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M62.861 32.2675C62.861 28.2315 60.3986 26.2894 55.6796 25.3925C55.1375 25.3019 53.5739 24.9722 52.3749 24.7347C48.4982 23.9581 47.0839 23.2706 47.0839 21.5378C47.0839 20.1925 47.8665 19.3269 51.8029 19.3269C54.8075 19.3269 56.0992 20.0144 56.7293 21.33C56.91 21.6894 57.0625 22.2253 57.0625 22.4925H62.41C62.41 21.8925 62.1712 21.0019 61.8695 20.2237C60.6689 17.2362 57.8733 15.1753 51.9223 15.1753C44.953 15.1753 41.708 17.8612 41.708 21.8675C41.708 25.7831 44.5602 27.9034 49.1896 28.769C50.2409 28.9769 51.9836 29.3065 52.6766 29.4284C56.5187 30.1456 57.5119 30.83 57.5119 32.7737C57.5119 34.3284 56.25 35.3112 52.642 35.3112C49.4897 35.3112 47.9277 34.7159 47.2662 33.3409C47.0839 32.9847 46.9346 32.2675 46.9346 31.8472H41.5855C41.5855 32.3237 41.6766 33.4909 41.9202 34.2659C42.8772 37.2534 45.4622 39.405 52.642 39.405C57.1536 39.405 60.155 38.1472 61.6809 36.0644V39.0769H66.3135V34.2706H62.5703C62.7589 33.6456 62.861 32.9769 62.861 32.2675Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M83.0801 30.6806L73.9454 15.4744H67.9064V39.0775H72.8643V23.0915L82.4201 39.0775H88.038V15.4744H83.0801V30.6806Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M94.4546 28.6626C94.4546 28.1533 94.9339 27.1111 95.5373 26.5736C96.3985 25.8126 97.7357 25.3361 99.5492 25.3361C101.46 25.3361 102.67 25.9392 103.404 26.6673C104.04 27.3329 104.257 28.1533 104.257 28.6626H94.4546ZM99.5177 21.2548C95.696 21.2548 92.671 22.6783 90.9833 25.1158C89.998 26.5095 89.4543 28.2798 89.4543 30.2751C89.4543 32.4611 89.932 34.2017 90.7947 35.5642C92.4809 38.2236 95.6316 39.3611 99.5177 39.3611C102.349 39.3611 104.485 38.7611 106.016 37.7814C107.765 36.6704 108.784 35.0892 109.195 33.4111H104.196C104.103 33.7923 103.655 34.3595 102.736 34.772C102.001 35.0892 100.951 35.3423 99.5177 35.3423C97.6069 35.3423 96.1769 34.8376 95.4399 34.0454C94.838 33.3798 94.486 32.7798 94.486 31.9829H109.323C109.609 29.3595 109.132 26.8564 107.826 24.9579C106.269 22.7079 103.528 21.2548 99.5177 21.2548Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M135.576 21.6665L131.471 34.6134L127.522 21.6665H121.857L118.006 34.6134L113.804 21.6665H108.486L114.753 39.0775H120.807C120.807 39.0775 124.247 29.0744 124.279 28.4712C124.31 28.2806 124.497 27.2494 124.497 27.2494C124.497 27.2494 124.69 28.2806 124.725 28.5025C124.786 29.0744 128.228 39.0775 128.228 39.0775H134.243L140.579 21.6665H135.576Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M152.669 28.5031C152.065 28.4078 149.614 28.0578 148.596 27.9031C146.113 27.5219 145.568 27.2375 145.568 26.4781C145.568 25.6578 146.397 25.2109 149.201 25.2109C151.619 25.2109 152.542 25.625 152.894 26.0984C153.049 26.3203 153.117 26.8562 153.117 27.0453H158.051C158.051 26.6984 157.954 25.625 157.732 24.9562C156.842 22.4578 153.813 21.2234 149.009 21.2234C143.371 21.2234 140.574 23.25 140.574 26.3484C140.574 29.6765 142.418 31.3531 146.272 31.8906C147.321 32.05 149.424 32.3672 150.089 32.4609C152.669 32.8406 153.72 33.0609 153.72 34.0453C153.72 35.0562 152.829 35.564 149.933 35.564C147.161 35.564 145.825 35.3422 145.505 34.5203C145.379 34.1703 145.348 33.8547 145.348 33.6312H140.286C140.286 34.2015 140.317 34.6781 140.475 35.3734C141.208 38.225 144.009 39.3922 149.933 39.3922C155.981 39.3922 158.719 37.5578 158.719 33.9484C158.719 30.6875 156.869 29.1375 152.669 28.5031Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M91.9348 18.5872C92.136 18.7887 92.4204 19.009 92.6922 19.2419C92.5744 19.2715 92.411 19.2887 92.2758 19.2887C91.7777 19.2887 91.5655 19.2028 91.5655 18.9731C91.5655 18.8403 91.7164 18.7106 91.9348 18.5872ZM92.1077 16.7403C92.1281 16.5715 92.2177 16.4294 92.4282 16.4294C92.6482 16.4294 92.7237 16.5669 92.7315 16.7231V16.82C92.7158 17.0044 92.5461 17.1606 92.301 17.3044C92.1831 17.1512 92.1155 16.9997 92.1077 16.8684C92.1014 16.8294 92.1014 16.7778 92.1077 16.7403ZM92.3434 20.2528C92.7975 20.2528 93.2878 20.1778 93.6571 20.0247C93.7247 20.084 93.8001 20.1497 93.8802 20.2059H95.6952C95.3495 19.934 94.9897 19.6575 94.6722 19.4231C95.0541 19.0622 95.2977 18.5481 95.3197 17.9528H93.9824C93.9682 18.2247 93.8802 18.4762 93.7247 18.6731C93.4497 18.4497 93.1747 18.2044 92.9594 18.0309C93.4355 17.7372 93.8991 17.32 93.9148 16.7184C93.9148 16.6872 93.9211 16.5559 93.9148 16.5122C93.8802 15.9372 93.3507 15.4153 92.4424 15.4153C91.4492 15.4153 90.8741 15.9669 90.8474 16.5497V16.7903C90.8552 17.0778 90.9605 17.4028 91.2387 17.7934C90.6745 18.0575 90.1591 18.3919 90.1465 18.9325C90.1465 18.9934 90.1418 19.1044 90.1465 19.1778C90.1874 20.0481 91.2088 20.2528 92.3434 20.2528Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M99.8151 20.2062C99.8151 20.2062 100.546 17.4781 100.554 17.3203C100.571 17.4719 101.286 20.2062 101.286 20.2062H102.881L104.218 15.4625H102.802C102.802 15.4625 102.086 18.3922 102.086 18.5422C102.086 18.3922 101.361 15.4625 101.361 15.4625H99.8606C99.8606 15.4625 99.1551 18.3922 99.1551 18.5422C99.1551 18.3922 98.4275 15.4625 98.4275 15.4625H96.8671L98.2326 20.2062H99.8151Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M106.817 16.499C107.627 16.499 107.884 16.8865 107.884 17.8272C107.884 18.8834 107.496 19.1662 106.825 19.1662C106.127 19.1662 105.761 18.8319 105.761 17.8272C105.761 16.8725 106.038 16.499 106.817 16.499ZM106.817 20.2772C108.563 20.2772 109.36 19.4584 109.36 17.7928C109.36 16.2069 108.617 15.3772 106.817 15.3772C105.053 15.3772 104.272 16.2975 104.272 17.81C104.272 19.4319 105.067 20.2772 106.817 20.2772Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M111.46 16.58H112.691C112.901 16.58 113.043 16.6253 113.112 16.7784C113.154 16.8487 113.164 16.9769 113.164 17.0831C113.164 17.1784 113.146 17.305 113.109 17.3894C113.055 17.5065 112.901 17.5472 112.722 17.5472H111.46V16.58ZM111.446 18.6019H112.433L113.271 20.2065H114.91L113.794 18.3065C114.014 18.2581 114.229 18.1097 114.38 17.8565C114.507 17.6472 114.591 17.344 114.591 16.9628C114.591 16.519 114.501 16.2003 114.316 15.9612C114.075 15.6456 113.662 15.4644 113.027 15.4644H110.007V20.2065H111.446V18.6019Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M119.367 19.0336H117.075V15.4633H115.6V20.2054H119.367V19.0336Z" fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M121.547 19.087V16.5729H122.468C122.828 16.5729 123.004 16.6261 123.189 16.8292C123.306 16.9636 123.34 17.4026 123.34 17.7433C123.34 18.1276 123.326 18.6651 123.202 18.8167C123.037 19.0089 122.841 19.087 122.468 19.087H121.547ZM124.421 19.5183C124.685 19.1245 124.756 18.7542 124.756 17.7433C124.756 16.8792 124.7 16.4839 124.407 16.0808C124.112 15.6729 123.576 15.4636 122.713 15.4636H120.095V20.2058H122.784C123.642 20.2058 124.134 19.9558 124.421 19.5183Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M128.637 16.58H129.864C130.075 16.58 130.22 16.6253 130.293 16.7784C130.33 16.8487 130.339 16.9769 130.339 17.0831C130.339 17.1784 130.323 17.305 130.287 17.3894C130.234 17.5065 130.075 17.5472 129.897 17.5472H128.637V16.58ZM128.623 18.6019H129.608L130.451 20.2065H132.086L130.969 18.3065C131.189 18.2581 131.409 18.1097 131.557 17.8565C131.683 17.6472 131.767 17.344 131.767 16.9628C131.767 16.519 131.679 16.2003 131.492 15.9612C131.252 15.6456 130.839 15.4644 130.204 15.4644H127.187V20.2065H128.623V18.6019Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M136.919 19.1008H134.272V18.3961H136.796V17.2679H134.272V16.5804H136.892V15.4633H132.838V20.207H136.919V19.1008Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M139.306 16.5662H140.471C140.711 16.5662 140.849 16.6397 140.931 16.7912C140.975 16.8553 140.996 16.9772 140.996 17.124C140.996 17.2631 140.983 17.3522 140.936 17.4381C140.867 17.5694 140.73 17.66 140.452 17.66H139.306V16.5662ZM139.324 18.7225C139.324 18.7225 140.615 18.7319 140.794 18.7303C141.381 18.7178 141.838 18.5662 142.111 18.2475C142.35 17.9959 142.465 17.624 142.465 17.0975C142.465 16.5084 142.314 16.099 142.034 15.86C141.773 15.5897 141.365 15.4631 140.788 15.4631H137.854V20.2069H139.324V18.7225Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M145.525 16.499C146.335 16.499 146.589 16.8865 146.589 17.8272C146.589 18.8834 146.201 19.1662 145.527 19.1662C144.831 19.1662 144.468 18.8319 144.468 17.8272C144.468 16.8725 144.741 16.499 145.525 16.499ZM145.525 20.2772C147.268 20.2772 148.066 19.4584 148.066 17.7928C148.066 16.2069 147.321 15.3772 145.525 15.3772C143.757 15.3772 142.976 16.2975 142.976 17.81C142.976 19.4319 143.772 20.2772 145.525 20.2772Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M150.18 16.58H151.41C151.619 16.58 151.764 16.6253 151.836 16.7784C151.872 16.8487 151.883 16.9769 151.883 17.0831C151.883 17.1784 151.866 17.305 151.831 17.3894C151.78 17.5065 151.619 17.5472 151.44 17.5472H150.18V16.58ZM150.169 18.6019H151.154L151.996 20.2065H153.629L152.515 18.3065C152.74 18.2581 152.953 18.1097 153.106 17.8565C153.228 17.6472 153.315 17.344 153.315 16.9628C153.315 16.519 153.222 16.2003 153.038 15.9612C152.796 15.6456 152.378 15.4644 151.747 15.4644H148.729V20.2065H150.169V18.6019Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M155.258 20.2062H156.744V16.6047H158.27V15.4625H153.744V16.6047H155.258V20.2062Z"
                              fill="white"></path>
                    </svg>
                </li>
                <li>
                    <svg width="177" height="55" viewbox="0 0 177 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.6495 34.5445H26.9762V10.7109H21.6495V34.5445Z" fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3.00757 10.7119H10.1098C14.5471 10.7119 15.8788 10.7119 17.6543 12.9173C18.5421 13.8001 18.9876 15.5657 18.9876 16.8898C18.9876 18.6554 18.0998 19.9796 16.3242 21.3037C19.9918 22.5199 19.918 25.5975 19.8815 27.1174C19.8783 27.2524 19.8753 27.3752 19.8753 27.4832C19.8753 29.2488 19.4299 31.0144 17.6543 32.3385C15.4365 34.1041 14.5471 34.5455 10.5537 34.5455H3.00757V10.7119ZM9.22201 29.2488H11.4415C12.3292 29.2488 14.5471 29.2488 14.1048 27.0418C14.5471 24.8349 12.7731 24.8349 11.4415 24.8349H9.22201V29.2488ZM9.22201 19.5382H10.9976C11.8853 19.5382 13.217 19.5382 13.217 17.7726C13.217 16.007 11.8853 16.007 10.9976 16.007H9.22201V19.5382Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M47.8381 25.7169C47.8381 20.8631 44.7309 16.0078 38.0726 16.0078C31.8581 16.0078 28.7525 20.8631 28.307 25.7169C28.7525 29.6909 31.8581 34.9876 38.0726 34.9876C44.7309 34.9876 47.8381 29.6909 47.8381 25.7169ZM42.5115 25.7169C42.5115 27.9238 40.7359 30.1308 38.0726 30.1308C35.8531 30.1308 34.0776 27.9238 34.0776 25.7169C34.0776 22.6287 35.8531 20.8631 38.0726 20.8631C40.7359 20.8631 42.5115 22.6287 42.5115 25.7169Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M58.9344 16.0078C65.5928 16.0078 68.7 20.8631 68.7 25.7169C68.7 29.6909 65.5928 34.9876 58.9344 34.9876C52.2777 34.9876 49.1689 29.6909 49.1689 25.7169C49.1689 20.8631 52.2777 16.0078 58.9344 16.0078ZM58.9344 30.1308C61.1539 30.1308 63.3733 27.9238 63.3733 25.7169C63.3733 22.6287 61.1539 20.8631 58.9344 20.8631C56.715 20.8631 54.4955 22.6287 54.4955 25.7169C54.4955 27.9238 56.715 30.1308 58.9344 30.1308Z"
                              fill="white"></path>
                        <path
                            d="M74.9141 16.4487H70.0313V34.5458H75.358V24.8336C75.358 23.9524 75.358 20.8626 78.4636 20.8626C81.127 20.8626 81.127 23.511 81.127 24.8336V34.5458H86.4536V24.8336C86.4536 23.511 86.4536 20.8626 89.5609 20.8626C92.2242 20.8626 92.2242 23.511 92.2242 24.8336V34.5458H97.5509V24.8336C97.5509 20.8626 97.5509 19.5385 95.7753 17.7729C94.4436 16.0073 92.2242 16.0073 90.8925 16.0073C88.2292 16.0073 86.4536 17.3315 85.122 19.0971C83.7903 16.4487 81.5724 16.0073 79.7969 16.0073C76.6881 16.0073 75.358 17.7729 74.9141 18.6557V16.4487Z"
                            fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M99.7691 10.7109H105.54V18.2146C107.315 16.0076 109.979 16.0076 110.422 16.0076C114.417 16.0076 119.744 18.6544 119.3 25.2753C119.744 31.8962 114.861 34.9875 110.422 34.9875C107.761 34.9875 105.983 33.6617 105.097 32.7789V34.5445H99.7691V10.7109ZM109.535 30.1306C112.198 30.1306 113.973 27.9236 113.973 25.7167C113.973 23.0683 112.198 20.8629 109.535 20.8629C106.873 20.8629 105.097 23.0683 105.097 25.7167C105.097 27.9236 106.873 30.1306 109.535 30.1306Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M135.723 33.6609C137.499 32.3383 138.83 31.0141 139.718 28.8072H133.947C133.504 29.69 132.616 30.5728 130.84 30.5728C128.622 30.5728 126.845 29.2486 126.403 27.0416H140.162V25.7174C140.162 20.4207 136.167 16.0068 130.396 16.0068C125.07 16.0068 121.076 20.4207 121.076 25.7174C121.076 31.0141 125.515 34.9867 130.84 34.9867C132.616 34.9867 134.391 34.5453 135.723 33.6609ZM130.84 20.4207C133.504 20.4207 134.835 22.6277 134.835 23.5105H126.403C126.845 22.6277 128.178 20.4207 130.84 20.4207Z"
                              fill="white"></path>
                        <path
                            d="M142.381 16.4487H147.264V18.6557C148.152 17.7729 150.371 16.4487 152.589 16.8901V21.7454C150.371 21.7454 147.708 21.7454 147.708 24.8336V34.5458H142.381V16.4487Z"
                            fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M171.675 39.8414C172.563 38.5172 173.009 34.9876 173.009 32.3377V16.4492H167.238V18.2148C166.35 16.4492 164.575 16.0078 162.355 16.0078C157.916 16.0078 153.477 19.5389 153.477 25.7169C153.477 31.4549 157.472 34.9876 162.355 34.9876C165.462 34.9876 166.794 33.6619 167.238 32.7791V33.2221C167.661 38.6903 166.068 38.946 163.611 39.3403C163.49 39.3597 163.368 39.3793 163.243 39.4C163.088 39.2457 162.77 39.1454 162.384 39.0236C161.667 38.7969 160.713 38.4958 160.136 37.6344H154.365C154.809 40.2828 156.585 42.9311 162.799 43.8123C167.238 44.2537 170.345 42.0483 171.675 39.8414ZM167.238 25.7169C167.682 28.3668 165.906 30.1308 163.243 30.1308C161.024 30.1308 158.804 28.3668 158.804 25.7169C158.804 22.6287 161.024 20.8631 163.243 20.8631C165.462 20.8631 167.682 22.6287 167.238 25.7169Z"
                              fill="white"></path>
                    </svg>
                </li>
                <li>
                    <svg width="177" height="55" viewbox="0 0 177 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M98.5899 13.2539H96.7686L95.6341 15.166C95.3386 15.6713 94.9159 16.445 94.7666 16.7418C94.6158 16.445 94.1805 15.6444 93.8945 15.166L92.7631 13.2539H90.9229L93.9526 18.1518V21.3065H95.5586V18.1218L98.5899 13.2539ZM93.0192 21.3034V19.7118H89.5275L89.5212 13.2539H87.9184V21.3065L93.0192 21.3034ZM85.1118 21.3065H86.7162V13.2539H85.1118V21.3065ZM81.9454 17.9797H80.1115L80.6269 16.5255C80.7856 16.0518 80.9459 15.5655 81.0261 15.2686C81.1062 15.5655 81.2665 16.0518 81.4268 16.5255L81.9454 17.9797ZM84.8824 21.3065L81.8416 13.2539H80.2844L77.2154 21.3065H78.9298L79.5599 19.516H82.4906L83.1224 21.3065H84.8824ZM76.1688 17.2818C76.1688 18.755 75.4066 19.7434 73.7221 19.7434H72.9316V14.8218H73.7786C75.4711 14.8218 76.1688 15.6365 76.1688 17.2818ZM77.8219 17.2818C77.8219 14.3386 76.1264 13.2539 73.8368 13.2539H71.3288V21.3065H73.7221C75.7822 21.3065 77.8219 20.1113 77.8219 17.2818Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M38.5112 40.9429H45.4554V25.3713L50.8234 40.9429H56.8891L62.3278 25.3713V40.9429H69.2091V13.2623H58.7072L53.8657 28.0271L49.0021 13.2623H38.5112V40.9429Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M137.511 23.3405C136.913 23.2427 136.182 23.1416 135.484 23.1416C132.894 23.1416 131.4 24.5437 130.371 26.7448H130.302V23.5442H124.855V40.93H130.834L130.825 33.5832C130.825 30.179 132.395 28.1437 135.184 28.1437C135.88 28.1437 136.166 28.1516 136.828 28.3521L137.511 23.3405ZM114.066 37.1263C111.306 37.1263 110.178 34.8211 110.178 32.2505C110.178 29.65 111.306 27.3448 114.066 27.3448C116.82 27.3448 117.95 29.65 117.95 32.2505C117.95 34.8211 116.82 37.1263 114.066 37.1263ZM114.066 41.3263C119.776 41.3263 124.129 37.9932 124.129 32.2505C124.129 26.4748 119.776 23.1416 114.066 23.1416C108.349 23.1416 104.001 26.4748 104.001 32.2505C104.001 37.9932 108.349 41.3263 114.066 41.3263ZM105.327 23.3405C104.733 23.2427 104.001 23.1416 103.303 23.1416C100.713 23.1416 99.2155 24.5437 98.1862 26.7448H98.1218V23.5442H92.6752V40.93H98.6545V33.5879C98.6545 30.179 100.228 28.1169 102.846 28.1327C103.546 28.1405 103.936 28.169 104.623 28.3521L105.327 23.3405ZM92.2038 23.3563C91.6051 23.2537 90.7518 23.1416 90.0509 23.1416C87.4597 23.1416 85.9652 24.5437 84.9359 26.7448H84.8684V23.5442H79.4249V40.93H85.4011V33.5879C85.4011 30.179 86.9599 28.1437 89.7524 28.1437C90.4501 28.1437 90.8587 28.1516 91.5249 28.3521L92.2038 23.3563ZM71.3289 40.93H77.3098V23.5442H71.3289V40.93Z"
                              fill="white"></path>
                    </svg>
                </li>
                <li>
                    <svg width="177" height="56" viewbox="0 0 177 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.2038 23.0196C22.2038 20.5628 22.2343 18.1061 22.1896 15.6494C22.1713 14.7281 22.4211 14.3387 23.4423 14.3688C25.7061 14.437 27.972 14.415 30.2358 14.3688C31.0297 14.3568 31.322 14.6478 31.32 15.4145C31.3078 23.7013 31.3078 31.9888 31.32 40.2769C31.32 41.1079 30.9891 41.3728 30.1648 41.3588C27.7994 41.3186 25.432 41.3788 23.0687 41.3166C22.518 41.2882 21.9934 41.0759 21.5805 40.7145C18.801 38.051 16.0621 35.3354 13.2196 32.5535C13.183 32.8746 13.1323 33.1155 13.1303 33.3563C13.1303 35.6525 13.1059 37.9486 13.1303 40.2448C13.1424 41.0477 12.8846 41.3869 12.0258 41.3728C9.6929 41.3327 7.35599 41.3407 5.02922 41.3728C4.30236 41.3728 3.99578 41.142 3.99781 40.3933C4.01135 32.0396 4.01135 23.6859 3.99781 15.3322C3.99781 14.6418 4.27191 14.3869 4.96222 14.3929C7.46359 14.413 9.96496 14.3708 12.4745 14.429C12.911 14.4411 13.4287 14.7381 13.7556 15.0552C16.2631 17.4819 18.736 19.9406 21.2069 22.4034C21.4459 22.6807 21.6618 22.9767 21.8526 23.2885L22.2038 23.0196Z"
                            fill="white"></path>
                        <path
                            d="M106.621 28.8904C105.884 31.2348 105.123 33.5711 104.426 35.9274C104.223 36.5898 103.927 36.8427 103.224 36.7965C102.313 36.7494 101.401 36.7494 100.49 36.7965C99.9353 36.8186 99.6511 36.642 99.4643 36.096C98.1486 32.2584 96.8093 28.4288 95.4462 24.6072C95.1457 23.7642 95.4808 23.6036 96.2178 23.6237C97.1294 23.6438 98.0451 23.6759 98.9526 23.6237C99.6835 23.5755 99.9678 23.8987 100.13 24.5389C100.756 26.9114 101.419 29.2738 102.286 31.6823C102.384 31.3712 102.489 31.0621 102.577 30.749C103.176 28.6716 103.795 26.6023 104.351 24.5149C104.53 23.8264 104.857 23.5896 105.547 23.6297C106.656 23.6939 108.051 23.3126 108.796 23.8304C109.541 24.3483 109.608 25.7613 109.943 26.795C110.446 28.4007 110.913 30.0064 111.606 31.6121C112.172 29.617 112.728 27.6199 113.305 25.6268C113.993 23.2564 113.421 23.6538 115.934 23.6297C118.403 23.6056 118.403 23.6297 117.611 25.8797C116.456 29.1754 115.266 32.4591 114.16 35.7709C113.884 36.6018 113.476 36.8648 112.641 36.7985C111.83 36.738 111.016 36.738 110.205 36.7985C109.539 36.8447 109.25 36.5778 109.064 35.9716C108.333 33.5911 107.559 31.2227 106.802 28.8503L106.621 28.8904Z"
                            fill="white"></path>
                        <path
                            d="M90.4232 35.9415C89.1339 36.3429 87.8934 36.9712 86.6041 37.0976C82.6186 37.485 79.7416 34.8095 79.498 30.6587C79.3813 29.0545 79.7807 27.4548 80.639 26.0885C82.5475 23.0577 86.4742 22.3632 89.3248 24.551C89.4486 24.6473 89.5786 24.7397 89.8669 24.9524C89.8669 23.0858 89.9176 21.4038 89.8466 19.7339C89.808 18.7745 90.1166 18.4051 91.1013 18.4975C91.8767 18.546 92.6543 18.5493 93.4301 18.5075C94.0088 18.4914 94.2808 18.6761 94.2788 19.3104C94.2598 24.8621 94.2598 30.4152 94.2788 35.9696C94.2788 36.5537 94.1082 36.8447 93.4667 36.7965C93.0289 36.7605 92.5888 36.7605 92.151 36.7965C91.2658 36.8768 90.5349 36.7504 90.4232 35.9415ZM90.0395 30.181C90.0395 28.2823 88.5878 26.7689 86.8031 26.813C85.0184 26.8572 83.7089 28.2923 83.7231 30.1991C83.7373 32.1059 85.0489 33.557 86.8254 33.557C88.602 33.557 90.0415 32.0838 90.0374 30.181H90.0395Z"
                            fill="white"></path>
                        <path
                            d="M128.575 24.5911C128.904 24.1094 129.15 23.3387 129.523 23.2745C130.539 23.0958 131.606 23.1942 132.65 23.2443C132.778 23.2443 132.989 23.6458 132.991 23.8465C133.011 27.941 133.016 32.0336 132.977 36.1261C132.977 36.3449 132.585 36.7283 132.343 36.7464C131.609 36.8286 130.831 36.8949 130.126 36.7303C129.684 36.6279 129.345 36.098 128.975 35.7749C128.059 36.1502 127.028 36.7464 125.917 36.9972C122.89 37.6797 120.121 36.2185 118.911 33.4085C118.055 31.501 117.998 29.3365 118.75 27.3871C120.204 23.5133 124.515 22.0702 128.057 24.264C128.252 24.3804 128.445 24.5068 128.575 24.5911ZM128.778 30.2111C128.778 28.3104 127.357 26.799 125.568 26.8191C123.78 26.8391 122.454 28.2863 122.458 30.185C122.462 32.0838 123.784 33.5349 125.548 33.557C127.361 33.5851 128.784 32.1099 128.796 30.2031L128.778 30.2111Z"
                            fill="white"></path>
                        <path
                            d="M44.5843 24.5048C45.7802 24.1034 46.9172 23.5253 48.111 23.3748C51.3758 22.9633 53.5625 24.8139 53.6802 28.0454C53.7797 30.7029 53.7026 33.3663 53.7249 36.0278C53.7249 36.5838 53.5219 36.8046 52.9554 36.7885C52.0438 36.7624 51.1281 36.7464 50.2185 36.7885C49.5079 36.8246 49.2663 36.5577 49.2764 35.8692C49.3069 33.9063 49.2927 31.9433 49.2764 29.9823C49.2912 29.4834 49.26 28.9843 49.183 28.491C49.0226 27.652 48.6044 26.9917 47.644 26.8753C46.6837 26.7588 45.8574 27.076 45.4432 27.9451C45.1694 28.5474 45.0196 29.1977 45.0026 29.8579C44.9478 31.7867 44.9275 33.7196 45.0026 35.6464C45.0432 36.6139 44.6859 36.8648 43.7844 36.7905C43.0091 36.7353 42.2309 36.7353 41.4556 36.7905C40.7267 36.8347 40.5257 36.5276 40.5298 35.8552C40.5501 32.0965 40.5501 28.3371 40.5298 24.5771C40.5298 23.8204 40.8242 23.5575 41.5449 23.6137C41.9836 23.6438 42.4239 23.6438 42.8626 23.6137C43.7438 23.5675 44.5518 23.5775 44.5843 24.5048Z"
                            fill="white"></path>
                        <path
                            d="M69.0925 31.3853H59.4626C59.8078 33.6192 62.6462 34.689 64.575 33.284C65.4866 32.6177 65.9698 32.8184 66.5424 33.541C66.606 33.6162 66.6738 33.6879 66.7454 33.7557C68.1788 35.1948 68.1403 35.4116 66.2764 36.377C62.0513 38.5648 56.6547 36.5778 55.4487 32.3969C53.8589 26.8793 58.5287 22.0762 64.1791 23.427C66.6845 24.0291 68.5179 26.0584 68.8956 28.7158C69.0194 29.5588 69.0255 30.4179 69.0925 31.3853ZM64.91 28.6576C64.8552 27.088 63.9639 26.2249 62.4411 26.2049C60.8067 26.1828 59.5601 27.2245 59.4931 28.6576H64.91Z"
                            fill="white"></path>
                        <path
                            d="M163.134 31.3692H153.232C153.731 32.0958 153.997 32.6959 154.45 33.0934C155.668 34.1592 157.57 34.1632 158.933 33.1134C159.483 32.6879 159.85 32.6779 160.287 33.1977C160.543 33.5028 160.849 33.7698 161.136 34.0528C162.177 35.0864 162.151 35.2229 160.953 36.0418C157.92 38.1052 151.1 37.8081 149.573 32.4651C148.822 29.8358 149.214 27.3469 151.197 25.3217C153.181 23.2965 155.615 22.853 158.289 23.4431C160.868 24.0111 162.711 26.1848 163.024 28.9265C163.109 29.7073 163.091 30.5001 163.134 31.3692ZM153.567 28.6716H158.961C159.004 27.1904 158.149 26.2992 156.661 26.2089C155.012 26.1105 153.686 27.1482 153.567 28.6716Z"
                            fill="white"></path>
                        <path
                            d="M168.847 23.7722C169.687 23.7722 170.471 23.712 171.224 23.8043C171.387 23.8516 171.535 23.9382 171.654 24.0564C171.774 24.1745 171.862 24.3204 171.911 24.4807C172.146 26.9535 172.128 26.9555 169.618 26.9877C169.415 26.9877 169.212 27.0037 168.926 27.0178C168.926 28.9807 168.839 30.9277 168.965 32.8605C169.026 33.8199 169.968 33.9604 170.776 33.836C171.584 33.7116 171.766 33.9785 171.777 34.7212C171.811 37.1297 171.777 37.1939 169.314 37.216C166.14 37.2461 164.644 35.9415 164.571 32.8264C164.474 28.9386 164.522 25.0468 164.492 21.1549C164.492 20.5769 164.679 20.2918 165.304 20.3159C166.08 20.348 166.857 20.336 167.633 20.3159C168.219 20.3039 168.473 20.5508 168.518 21.1389C168.591 21.9979 168.727 22.8449 168.847 23.7722Z"
                            fill="white"></path>
                        <path
                            d="M135.826 27.5657C135.826 24.8741 135.848 22.1806 135.811 19.489C135.811 18.7684 136.014 18.4533 136.776 18.4955C137.651 18.5436 138.532 18.5276 139.415 18.4955C140.047 18.4754 140.319 18.6821 140.315 19.3545C140.294 24.8715 140.294 30.3891 140.315 35.9074C140.315 36.5436 140.112 36.8186 139.448 36.7845C138.604 36.7353 137.759 36.7353 136.916 36.7845C136.092 36.8427 135.799 36.5838 135.815 35.7327C135.858 33.0191 135.826 30.2914 135.826 27.5657Z"
                            fill="white"></path>
                        <path
                            d="M147.604 27.6661C147.604 30.3576 147.571 33.0512 147.622 35.7428C147.638 36.5978 147.342 36.8507 146.519 36.7945C145.646 36.7363 144.763 36.7624 143.88 36.7945C143.305 36.8106 143.121 36.5697 143.123 36.0218C143.135 30.4379 143.135 24.8527 143.123 19.2662C143.123 18.6902 143.368 18.5015 143.91 18.5115C144.854 18.5256 145.801 18.5376 146.753 18.5115C147.417 18.4894 147.626 18.7584 147.618 19.3987C147.587 22.1464 147.604 24.9063 147.604 27.6661Z"
                            fill="white"></path>
                        <path
                            d="M74.548 24.5791C75.8616 24.1255 77.0636 23.6538 78.3001 23.3066C79.0107 23.1059 79.4614 23.3929 79.3457 24.2579C79.2691 24.9517 79.2393 25.6497 79.2563 26.3474C79.2563 26.9495 78.9985 27.1302 78.3894 27.1322C76.02 27.1322 74.9825 28.202 74.9764 30.5704C74.9764 32.3307 74.9541 34.0929 74.9764 35.8532C74.9886 36.5216 74.7937 36.8327 74.0607 36.7925C73.1532 36.7443 72.2334 36.7624 71.3279 36.7925C70.7756 36.8066 70.534 36.6099 70.5361 36.0439C70.5482 32.156 70.5361 28.2702 70.5746 24.3824C70.5746 24.1355 70.9807 23.7401 71.2629 23.6779C71.7766 23.5615 72.3349 23.6658 72.873 23.6357C73.7744 23.5815 74.5724 23.6197 74.548 24.5791Z"
                            fill="white"></path>
                    </svg>
                </li>
                <li>
                    <svg width="177" height="56" viewbox="0 0 177 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M94.0416 49.8693C94.0438 48.6333 94.0456 47.3977 94.0471 46.1624C94.0471 41.6543 94.0471 37.1457 94.0471 32.6368V32.2917C94.1581 32.2862 94.2486 32.2779 94.3379 32.2773C96.4915 32.2773 98.6455 32.2773 100.8 32.2773C102.336 32.2773 103.815 32.5449 105.191 33.2572C107.047 34.2183 108.294 35.7139 108.925 37.6886C109.74 40.2366 109.698 42.7846 108.611 45.249C107.539 47.6768 105.606 49.0844 103.032 49.6427C102.556 49.7457 102.068 49.7961 101.589 49.8709L94.0416 49.8693ZM97.0577 47.2426C98.6477 47.2099 100.218 47.2819 101.763 47.1213C104.067 46.8814 105.546 45.5459 106.166 43.312C106.511 42.069 106.531 40.8022 106.323 39.5315C106.153 38.4862 105.79 37.5196 105.102 36.7004C104.126 35.5416 102.827 35.0098 101.353 34.9422C99.9785 34.8791 98.5994 34.9162 97.2226 34.9112C97.1677 34.9163 97.1133 34.9257 97.06 34.9395L97.0577 47.2426Z"
                            fill="white"></path>
                        <path
                            d="M134.759 49.8692C134.766 49.7407 134.781 49.6127 134.781 49.4848C134.781 43.8787 134.781 38.2725 134.781 32.6661V32.2944C134.886 32.2878 134.966 32.2778 135.045 32.2778C137.051 32.2778 139.058 32.2778 141.064 32.2778C142.07 32.2778 143.054 32.418 143.986 32.8173C145.707 33.5557 146.617 34.8929 146.846 36.7186C146.951 37.5627 146.909 38.4187 146.721 39.2483C146.297 41.1356 145.066 42.1841 143.207 42.5608C143.144 42.5735 143.08 42.5846 143.017 42.5996C142.981 42.6118 142.945 42.6263 142.911 42.6428C143.022 42.7757 143.128 42.8998 143.233 43.0228C145.111 45.2177 146.989 47.4131 148.867 49.6088C148.938 49.6925 149.003 49.7817 149.071 49.8686H145.741C145.694 49.7911 145.643 49.7163 145.588 49.6443C143.757 47.4619 141.915 45.285 140.094 43.0937C139.865 42.8167 139.638 42.7004 139.281 42.7214C138.76 42.7519 138.236 42.7292 137.699 42.7292V49.8692H134.759ZM137.712 40.2244C137.744 40.2327 137.777 40.2386 137.81 40.2421C138.9 40.2421 139.99 40.2498 141.079 40.2371C141.384 40.2312 141.687 40.1941 141.983 40.1263C143.214 39.8493 143.934 38.9786 144.009 37.6957C144.082 36.4527 143.454 35.4546 142.32 35.0712C141.971 34.9524 141.606 34.8857 141.238 34.8735C140.121 34.8452 139.003 34.8569 137.886 34.8536C137.83 34.8536 137.779 34.8635 137.712 34.8696V40.2244Z"
                            fill="white"></path>
                        <path
                            d="M114.956 49.8697C114.956 49.75 114.964 49.6298 114.964 49.5102C114.964 43.8971 114.964 38.2822 114.964 32.6655V32.2949H125.953V34.8983H118.007V39.1319H125.13V41.7354H117.999V47.1992H125.995V49.8652L114.956 49.8697Z"
                            fill="white"></path>
                        <path
                            d="M159.002 19.9926C158.955 20.2141 158.914 20.4407 158.859 20.6617C158.424 22.4115 157.257 23.4822 155.613 24.0788C153.913 24.6959 152.169 24.6737 150.418 24.3347C149.325 24.1327 148.28 23.7298 147.335 23.1466C147.156 23.0358 147.069 22.9156 147.073 22.6874C147.089 21.738 147.08 20.7885 147.08 19.7937C147.172 19.8552 147.239 19.894 147.302 19.9405C148.772 21.0782 150.422 21.7518 152.292 21.846C153.129 21.8886 153.957 21.8288 154.739 21.4959C155.546 21.153 156.037 20.5653 156.1 19.6729C156.16 18.8038 155.863 18.0788 155.101 17.6273C154.573 17.326 154.023 17.0635 153.457 16.8419C152.296 16.3688 151.111 15.9523 149.961 15.4598C149.493 15.2593 149.055 14.9574 148.652 14.6406C147.391 13.6491 146.923 12.2931 146.953 10.7366C146.993 8.59567 148.218 6.94832 150.377 6.28749C153.01 5.48154 155.525 5.86153 157.895 7.24245C157.98 7.2923 158.073 7.41859 158.074 7.51054C158.087 8.45996 158.081 9.40993 158.079 10.3599C158.073 10.3956 158.063 10.4305 158.049 10.464L157.575 10.125C156.021 9.0172 154.306 8.43227 152.376 8.59346C151.741 8.64885 151.135 8.79841 150.613 9.18504C149.622 9.91954 149.548 11.4971 150.502 12.2754C150.867 12.5723 151.309 12.7955 151.749 12.9733C153.075 13.5089 154.433 13.9654 155.745 14.5348C156.369 14.8062 156.957 15.2106 157.481 15.6498C158.391 16.4131 158.832 17.449 158.956 18.6216C158.968 18.6923 158.986 18.7621 159.008 18.8304L159.002 19.9926Z"
                            fill="white"></path>
                        <path
                            d="M67.0813 49.8693C66.5819 49.7951 66.0774 49.7358 65.5796 49.6438C64.4914 49.4439 63.458 49.086 62.5002 48.5216C62.3287 48.4208 62.2649 48.3045 62.2677 48.1034C62.2788 47.211 62.2727 46.3181 62.2727 45.3637C62.3909 45.444 62.4697 45.495 62.5463 45.5498C64.22 46.7496 66.0808 47.3678 68.1513 47.3157C68.8849 47.2974 69.5986 47.1772 70.2679 46.8382C71.6658 46.1303 71.6392 44.1612 70.4971 43.4643C69.9421 43.1264 69.3372 42.86 68.7301 42.6235C67.5703 42.172 66.3827 41.7926 65.2272 41.3279C64.745 41.1351 64.2982 40.8365 63.8654 40.5424C61.5607 38.9792 61.2665 34.6714 64.5735 33.0479C65.7539 32.4685 67.0053 32.2525 68.3072 32.2796C69.9771 32.3139 71.5637 32.6756 73.0366 33.4888C73.2413 33.5996 73.314 33.7286 73.314 33.9635C73.299 34.8276 73.3079 35.6923 73.3079 36.6146L72.89 36.3293C71.3073 35.2469 69.5742 34.6858 67.6418 34.8204C66.9898 34.8658 66.3599 35.0032 65.8105 35.3821C64.8083 36.0734 64.7428 37.5679 65.715 38.3012C66.0907 38.5843 66.5392 38.7942 66.9826 38.9626C68.3111 39.4661 69.6674 39.8971 70.9832 40.43C71.5875 40.6825 72.1522 41.0207 72.6597 41.4342C73.9456 42.4667 74.3429 43.8892 74.2042 45.4679C74.0277 47.4869 72.7985 48.6972 70.9743 49.3503C70.3045 49.5901 69.5759 49.6666 68.8738 49.8172L68.6341 49.8693H67.0813Z"
                            fill="white"></path>
                        <path
                            d="M27.972 49.8695C27.9804 49.7415 27.9965 49.6136 27.9965 49.4862C27.9965 43.8835 27.9965 38.2809 27.9965 32.6786V32.2881H31.2996V49.8695H27.972Z"
                            fill="white"></path>
                        <path
                            d="M81.9485 49.8696V32.2954H85.2189C85.2244 32.3829 85.235 32.471 85.235 32.5591C85.235 38.2559 85.235 43.9526 85.235 49.6491C85.235 49.7228 85.2261 49.7959 85.2211 49.8707L81.9485 49.8696Z"
                            fill="white"></path>
                        <path
                            d="M17.0017 24.2805V6.21665C17.0568 6.20711 17.1124 6.20064 17.1682 6.19727C19.3958 6.2028 21.6234 6.1873 23.8504 6.22496C24.9897 6.24379 26.0858 6.51355 27.0691 7.11843C28.4282 7.95208 29.0431 9.21668 29.1275 10.7649C29.1902 11.9209 28.9532 13.0011 28.2151 13.9322C27.8655 14.372 27.4081 14.7143 26.8871 14.9259C26.9148 14.9532 26.9455 14.9772 26.9787 14.9974C28.7601 15.7729 29.6425 17.1577 29.698 19.0642C29.7423 20.6623 29.254 22.0648 27.9421 23.0851C27.0952 23.7443 26.1057 24.0628 25.0563 24.193C24.5423 24.2514 24.0253 24.2803 23.508 24.2794C21.4547 24.2888 19.4013 24.2833 17.3519 24.2833L17.0017 24.2805ZM19.8958 21.6189C19.941 21.6289 19.9868 21.6359 20.0329 21.64C21.281 21.64 22.5302 21.6433 23.7766 21.6317C24.0722 21.6286 24.3668 21.5965 24.6562 21.5358C25.6362 21.3298 26.3976 20.8263 26.6646 19.8187C26.9315 18.8111 26.8311 17.8484 26.0286 17.0812C25.4659 16.5428 24.745 16.3578 23.9908 16.3445C22.6872 16.3212 21.3825 16.3329 20.08 16.3318C20.0178 16.3367 19.956 16.3466 19.8952 16.3611L19.8958 21.6189ZM19.8958 13.7771C19.9435 13.7858 19.9917 13.7917 20.0401 13.7948C21.1855 13.7948 22.3315 13.8114 23.4769 13.781C23.9009 13.7629 24.3207 13.6894 24.7256 13.5622C25.4509 13.3439 25.957 12.8709 26.1596 12.122C26.3064 11.5855 26.3085 11.0199 26.1657 10.4824C26.0158 9.90575 25.6784 9.44988 25.1257 9.23053C24.6867 9.05604 24.2095 8.90704 23.7427 8.88543C22.5163 8.83004 21.2865 8.84943 20.0578 8.84057C20.0029 8.84588 19.9487 8.85645 19.8958 8.87214V13.7771Z"
                            fill="white"></path>
                        <path
                            d="M88.4454 5.91699L100.525 17.7204V6.18786H103.389V24.5303L91.4172 12.492L91.3023 12.5629V24.2406H88.4454V5.91699Z"
                            fill="white"></path>
                        <path
                            d="M43.0629 38.4997V49.5742H40.135V32.3052L52.5615 43.4461V32.5661H55.5028V49.8483L43.0629 38.4997Z"
                            fill="white"></path>
                        <path
                            d="M36.1438 6.21351H39.115V6.55527C39.115 9.93898 39.115 13.3231 39.115 16.7075C39.115 17.6348 39.1966 18.5487 39.514 19.4278C40.049 20.909 41.1988 21.7692 42.7782 21.8135C43.3448 21.8296 43.932 21.8024 44.4803 21.6723C45.8732 21.3399 46.6279 20.3551 46.9992 19.0323C47.2179 18.254 47.2767 17.4558 47.2767 16.6504C47.2767 13.2848 47.2767 9.91923 47.2767 6.55361V6.2124H50.2618V6.52536C50.2618 10.0106 50.2618 13.4961 50.2618 16.9817C50.2618 18.2059 50.1203 19.4095 49.6663 20.5589C48.9182 22.4522 47.5642 23.6902 45.6041 24.2491C44.0768 24.6937 42.4559 24.7063 40.9219 24.2857C38.4707 23.621 37.0023 21.9792 36.4268 19.5508C36.245 18.7796 36.1501 17.9905 36.1438 17.1983C36.1143 13.6211 36.1304 10.0433 36.131 6.46554C36.1293 6.38522 36.1376 6.30435 36.1438 6.21351Z"
                            fill="white"></path>
                        <path
                            d="M122.057 24.2728H111.421V6.22168H122.051V8.89711H114.343V13.2404H121.255V15.9358H114.344V21.5431H122.058L122.057 24.2728Z"
                            fill="white"></path>
                        <path
                            d="M129.043 19.8781C129.779 20.2991 130.478 20.7722 131.235 21.1162C132.841 21.8451 134.524 22.0933 136.26 21.6474C137.076 21.4374 137.732 20.9932 137.975 20.1258C138.266 19.0883 137.92 18.1123 136.973 17.5777C136.286 17.19 135.533 16.9202 134.804 16.6134C133.694 16.1458 132.528 15.7786 131.466 15.2147C129.036 13.9219 128.155 10.9157 129.444 8.55383C130.146 7.26763 131.29 6.52483 132.673 6.17697C135.19 5.54384 137.581 5.91828 139.827 7.21778C139.897 7.25067 139.954 7.30405 139.992 7.37065C140.03 7.43726 140.046 7.51386 140.038 7.59001C140.027 8.53777 140.033 9.48552 140.033 10.4809C139.922 10.4028 139.839 10.3507 139.762 10.2937C138.581 9.41351 137.29 8.78592 135.808 8.61753C134.938 8.51893 134.072 8.51949 133.235 8.82414C132.083 9.24401 131.566 10.2184 131.871 11.3722C131.934 11.6292 132.053 11.869 132.221 12.074C132.389 12.2791 132.6 12.4443 132.84 12.5576C133.535 12.8899 134.261 13.1669 134.977 13.4627C136.068 13.9102 137.196 14.2863 138.248 14.8103C139.784 15.5748 140.71 16.8388 140.905 18.5731C141.222 21.392 139.906 23.4387 137.173 24.1959C134.439 24.9532 131.795 24.577 129.318 23.1601C129.111 23.0416 129.031 22.902 129.036 22.6555C129.054 21.7183 129.043 20.7788 129.043 19.8781Z"
                            fill="white"></path>
                        <path
                            d="M68.2978 10.5163C67.4898 9.89816 66.6984 9.39132 65.8072 9.06285C64.4786 8.57207 63.1184 8.40147 61.7305 8.7665C61.0029 8.9576 60.4086 9.34867 60.1544 10.1042C59.8214 11.0835 60.1688 12.0662 61.0978 12.5669C61.7677 12.9275 62.498 13.1762 63.2066 13.4654C64.2655 13.8963 65.3554 14.2614 66.3821 14.756C67.8394 15.4584 68.8272 16.5934 69.1014 18.2319C69.4121 20.082 69.1064 21.7648 67.6163 23.067C66.7284 23.8425 65.6673 24.2552 64.5158 24.4341C62.2011 24.793 59.9957 24.459 57.9046 23.3783C57.4551 23.1457 57.2387 22.8798 57.2831 22.3375C57.343 21.6174 57.298 20.8824 57.298 20.1545V19.8C57.5006 19.9485 57.6588 20.0676 57.8197 20.1822C59.4085 21.3166 61.1705 21.9132 63.1339 21.8661C63.7818 21.8604 64.4225 21.7299 65.0208 21.4817C66.7145 20.7566 66.6857 18.4557 65.3782 17.6951C64.6423 17.2675 63.8349 16.959 63.0474 16.6233C61.9375 16.1497 60.7859 15.763 59.7104 15.2241C58.4013 14.5677 57.5378 13.4959 57.2636 12.0235C56.7259 9.13818 58.1288 6.89259 60.9913 6.17582C63.4769 5.55322 65.8455 5.94207 68.0669 7.22162C68.2406 7.32188 68.3011 7.43986 68.2983 7.63983C68.2872 8.4973 68.2939 9.35698 68.2939 10.2117L68.2978 10.5163Z"
                            fill="white"></path>
                        <path d="M76.9257 6.2124H79.8741V24.2624H76.9257V6.2124Z" fill="white"></path>
                    </svg>
                </li>
                <li>
                    <svg width="186" height="56" viewbox="0 0 186 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6.27651 21.0437L3.23903 21.1286C2.05787 21.1735 1.5677 21.2801 1.26253 21.7513C1.05856 22.0743 0.957361 22.3324 0.914668 22.5023C0.875138 22.6754 0.813472 22.7604 0.69172 22.7604C0.549412 22.7604 0.508301 22.6538 0.508301 22.4174C0.508301 22.0743 0.895694 20.1212 0.935224 19.9497C0.996891 19.67 1.05856 19.5418 1.18031 19.5418C1.34475 19.5418 1.54873 19.7566 2.05787 19.7998C2.64766 19.8631 3.42245 19.9064 4.09604 19.9064H12.168C12.8195 19.9064 13.2686 19.8415 13.5737 19.7998C13.8805 19.7349 14.0418 19.6916 14.124 19.6916C14.2679 19.6916 14.2868 19.8198 14.2868 20.1429C14.2868 20.5924 14.2252 22.0743 14.2252 22.6321C14.2062 22.8469 14.1651 22.9752 14.0418 22.9752C13.8805 22.9752 13.8378 22.8686 13.8188 22.5472L13.7983 22.3108C13.7571 21.7513 13.2069 21.1502 11.3917 21.1086L8.82381 21.0437V29.8436C8.82381 31.8184 8.82381 33.5151 8.92659 34.4376C8.98826 35.0387 9.11001 35.5116 9.72193 35.5965C10.0065 35.6398 10.4556 35.6831 10.7608 35.6831C10.9853 35.6831 11.0865 35.748 11.0865 35.8546C11.0865 36.0044 10.9236 36.0694 10.6991 36.0694C9.35351 36.0694 8.07116 36.0044 7.49877 36.0044C7.03074 36.0044 5.74681 36.0694 4.93091 36.0694C4.66527 36.0694 4.52454 36.0044 4.52454 35.8546C4.52454 35.748 4.60518 35.6831 4.85027 35.6831C5.15544 35.6831 5.39894 35.6398 5.58394 35.5965C5.99031 35.5116 6.11206 35.0387 6.17531 34.4159C6.27651 33.5151 6.27651 31.8184 6.27651 29.8436V21.0437Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M29.349 28.3634C29.349 23.5546 26.7195 20.5708 23.3768 20.5708C21.0319 20.5708 18.3629 21.9461 18.3629 27.2894C18.3629 31.7551 20.7062 35.2968 24.6197 35.2968C26.0475 35.2968 29.349 34.5674 29.349 28.3634ZM15.5483 27.9554C15.5483 24.2839 17.8521 19.5418 23.9682 19.5418C29.0439 19.5418 32.2031 22.6538 32.2031 27.5691C32.2031 32.4844 28.9411 36.3707 23.7642 36.3707C17.9154 36.3707 15.5483 31.7551 15.5483 27.9554Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M39.0089 21.0437L35.9714 21.1286C34.7887 21.1735 34.2985 21.2801 33.995 21.7513C33.7894 22.0743 33.6898 22.3324 33.6471 22.5023C33.6076 22.6754 33.5459 22.7604 33.4241 22.7604C33.2818 22.7604 33.2407 22.6538 33.2407 22.4174C33.2407 22.0743 33.6281 20.1212 33.6676 19.9497C33.7293 19.67 33.7894 19.5418 33.9127 19.5418C34.0756 19.5418 34.2796 19.7566 34.7887 19.7998C35.3801 19.8631 36.1549 19.9064 36.8269 19.9064H44.9005C45.5519 19.9064 46.001 19.8415 46.3046 19.7998C46.6129 19.7349 46.7742 19.6916 46.8564 19.6916C46.9987 19.6916 47.0193 19.8198 47.0193 20.1429C47.0193 20.5924 46.9576 22.0743 46.9576 22.6321C46.9386 22.8469 46.8959 22.9752 46.7742 22.9752C46.6129 22.9752 46.5702 22.8686 46.5512 22.5472L46.5307 22.3108C46.488 21.7513 45.9393 21.1502 44.1241 21.1086L41.5562 21.0437V29.8436C41.5562 31.8184 41.5562 33.5151 41.659 34.4376C41.7191 35.0387 41.8424 35.5116 42.4544 35.5965C42.7374 35.6398 43.188 35.6831 43.4932 35.6831C43.7177 35.6831 43.8189 35.748 43.8189 35.8546C43.8189 36.0044 43.6545 36.0694 43.4315 36.0694C42.0859 36.0694 40.802 36.0044 40.2312 36.0044C39.7632 36.0044 38.4792 36.0694 37.6633 36.0694C37.3977 36.0694 37.257 36.0044 37.257 35.8546C37.257 35.748 37.3376 35.6831 37.5827 35.6831C37.8879 35.6831 38.1314 35.6398 38.3164 35.5965C38.7227 35.5116 38.8445 35.0387 38.9077 34.4159C39.0089 33.5151 39.0089 31.8184 39.0089 29.8436V21.0437Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M54.5199 29.3934C54.6211 29.3934 54.6417 29.3285 54.6211 29.2635L52.7853 23.9636C52.7664 23.877 52.7458 23.7704 52.6857 23.7704C52.6241 23.7704 52.583 23.877 52.5624 23.9636L50.6871 29.2436C50.6665 29.3285 50.6871 29.3934 50.7693 29.3934H54.5199ZM50.3614 30.4674C50.2602 30.4674 50.2175 30.509 50.178 30.6389L49.0774 33.7076C48.8735 34.2455 48.7707 34.7583 48.7707 35.0164C48.7707 35.4044 48.9541 35.6824 49.5866 35.6824H49.8918C50.1368 35.6824 50.1985 35.7241 50.1985 35.8539C50.1985 36.0271 50.0752 36.0687 49.8522 36.0687C49.1992 36.0687 48.3232 36.0038 47.6907 36.0038C47.4662 36.0038 46.3451 36.0687 45.2857 36.0687C45.0201 36.0687 44.8983 36.0271 44.8983 35.8539C44.8983 35.7241 44.9806 35.6824 45.1418 35.6824C45.3268 35.6824 45.6115 35.6608 45.7759 35.6391C46.7136 35.5109 47.1009 34.7816 47.5073 33.7076L52.6241 20.2288C52.8676 19.6061 52.9909 19.3696 53.1949 19.3696C53.3767 19.3696 53.5 19.5628 53.704 20.0556C54.1926 21.2378 57.453 29.9945 58.7591 33.2581C59.5339 35.1896 60.1253 35.4893 60.5522 35.5958C60.8589 35.6608 61.1641 35.6824 61.4076 35.6824C61.5721 35.6824 61.6733 35.7041 61.6733 35.8539C61.6733 36.0271 61.4898 36.0687 60.7372 36.0687C60.0019 36.0687 58.514 36.0687 56.8838 36.0271C56.517 36.0038 56.2719 36.0038 56.2719 35.8539C56.2719 35.7241 56.3541 35.6824 56.5565 35.6608C56.7004 35.6192 56.8443 35.426 56.7399 35.1663L55.1097 30.6172C55.0702 30.509 55.0101 30.4674 54.9057 30.4674H50.3614Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M66.3602 29.8439C66.3602 32.5913 66.3603 34.0732 66.7888 34.4595C67.135 34.7808 67.6647 34.9307 69.2538 34.9307C70.3354 34.9307 71.1307 34.909 71.6399 34.3313C71.8834 34.0515 72.1285 33.4504 72.1696 33.0408C72.1901 32.8493 72.2312 32.7211 72.3925 32.7211C72.5364 32.7211 72.557 32.8277 72.557 33.0858C72.557 33.3206 72.4146 34.9307 72.2518 35.5534C72.1284 36.0263 72.0273 36.1329 70.9663 36.1329C69.4989 36.1329 68.4379 36.0896 67.5208 36.0696C66.6038 36.0263 65.8701 36.0047 65.0352 36.0047C64.8123 36.0047 64.3616 36.0047 63.8746 36.0263C63.405 36.0263 62.8753 36.0696 62.4673 36.0696C62.2017 36.0696 62.0594 36.0047 62.0594 35.8548C62.0594 35.7466 62.1416 35.6816 62.3851 35.6816C62.6919 35.6816 62.9354 35.64 63.1188 35.5967C63.5267 35.5118 63.6279 35.0389 63.7102 34.4162C63.8129 33.5154 63.8129 31.8187 63.8129 29.8439V26.0658C63.8129 22.8039 63.8129 22.2028 63.7718 21.5168C63.7307 20.7858 63.5679 20.4428 62.8958 20.293C62.7314 20.2497 62.4879 20.228 62.2223 20.228C61.9977 20.228 61.876 20.1847 61.876 20.0349C61.876 19.885 62.0183 19.8417 62.3235 19.8417C63.2832 19.8417 64.5656 19.9067 65.1174 19.9067C65.606 19.9067 67.0939 19.8417 67.8893 19.8417C68.1739 19.8417 68.3162 19.885 68.3162 20.0349C68.3162 20.1847 68.1944 20.228 67.9509 20.228C67.7264 20.228 67.3991 20.2497 67.1556 20.293C66.6038 20.4012 66.4425 20.7658 66.3998 21.5168C66.3603 22.2028 66.3602 22.8039 66.3602 26.0658V29.8439Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M82.257 26.0668C82.257 22.8049 82.257 22.2038 82.2174 21.5161C82.1747 20.7868 82.0135 20.4438 81.3399 20.2923C81.1754 20.2507 80.8307 20.229 80.5445 20.229C80.32 20.229 80.1982 20.1857 80.1982 20.0359C80.1982 19.886 80.3406 19.8427 80.6457 19.8427C81.7273 19.8427 83.0112 19.906 83.582 19.906C84.4169 19.906 85.5996 19.8427 86.5373 19.8427C89.0846 19.8427 90.0017 20.7435 90.329 21.0666C90.778 21.5161 91.3473 22.4819 91.3473 23.6191C91.3473 26.6679 89.2285 28.8142 86.3333 28.8142C86.2321 28.8142 86.0076 28.8142 85.9064 28.7925C85.8036 28.7709 85.6613 28.7509 85.6613 28.5994C85.6613 28.4279 85.8036 28.363 86.2321 28.363C87.3721 28.363 88.9628 27.0109 88.9628 24.8213C88.9628 24.1137 88.9012 22.675 87.7595 21.6027C87.0274 20.8934 86.191 20.7652 85.7214 20.7652C85.4162 20.7652 85.111 20.7868 84.926 20.8518C84.8248 20.8934 84.7647 21.0216 84.7647 21.2581V29.8449C84.7647 31.8197 84.7647 33.5147 84.8659 34.4388C84.926 35.0383 85.0509 35.5111 85.6613 35.5961C85.9459 35.641 86.395 35.6826 86.7017 35.6826C86.9247 35.6826 87.0274 35.7476 87.0274 35.8542C87.0274 36.004 86.863 36.0689 86.6385 36.0689C85.2944 36.0689 84.0089 36.004 83.4792 36.004C83.0112 36.004 81.7273 36.0689 80.9114 36.0689C80.6457 36.0689 80.505 36.004 80.505 35.8542C80.505 35.7476 80.5856 35.6826 80.8307 35.6826C81.1359 35.6826 81.3794 35.641 81.5644 35.5961C81.9708 35.5111 82.0735 35.0383 82.1558 34.4155C82.257 33.5147 82.257 31.8197 82.257 29.8449V26.0668Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M98.0121 27.7625C98.0121 27.999 98.0516 28.0839 98.1955 28.1472C98.624 28.2987 99.2343 28.3636 99.745 28.3636C100.559 28.3636 100.825 28.277 101.192 27.999C101.802 27.5261 102.394 26.5387 102.394 24.7787C102.394 21.7316 100.479 20.8508 99.2754 20.8508C98.7663 20.8508 98.3995 20.8724 98.1955 20.9357C98.0516 20.979 98.0121 21.0656 98.0121 21.2371V27.7625ZM95.6071 26.0658C95.6071 22.8039 95.6071 22.2028 95.5659 21.5168C95.5264 20.7858 95.362 20.4428 94.6884 20.293C94.5271 20.2497 94.1792 20.228 93.8946 20.228C93.6701 20.228 93.5483 20.1847 93.5483 20.0349C93.5483 19.885 93.6922 19.8417 93.9958 19.8417C95.0774 19.8417 96.3613 19.9067 96.7898 19.9067C97.4824 19.9067 99.0319 19.8417 99.6628 19.8417C100.947 19.8417 102.313 19.9699 103.413 20.7658C103.984 21.1721 104.8 22.2677 104.8 23.7047C104.8 25.2949 104.168 26.7535 102.109 28.5135C103.923 30.9178 105.33 32.8277 106.533 34.1581C107.673 35.4036 108.51 35.5534 108.815 35.6184C109.039 35.6617 109.223 35.6816 109.386 35.6816C109.548 35.6816 109.631 35.7466 109.631 35.8548C109.631 36.0263 109.488 36.0696 109.243 36.0696H107.306C106.165 36.0696 105.656 35.9614 105.126 35.6617C104.248 35.1671 103.474 34.1581 102.332 32.5063C101.518 31.3258 100.58 29.8655 100.316 29.5442C100.215 29.4159 100.09 29.3926 99.949 29.3926L98.1765 29.351C98.0737 29.351 98.0121 29.3926 98.0121 29.5225V29.8222C98.0121 31.8187 98.0121 33.5154 98.1133 34.4162C98.1765 35.0389 98.2983 35.5118 98.9086 35.5967C99.2154 35.64 99.6628 35.6816 99.9079 35.6816C100.071 35.6816 100.153 35.7466 100.153 35.8548C100.153 36.0047 100.011 36.0696 99.745 36.0696C98.5623 36.0696 97.0554 36.0047 96.7471 36.0047C96.3613 36.0047 95.0774 36.0696 94.2615 36.0696C93.9958 36.0696 93.8535 36.0047 93.8535 35.8548C93.8535 35.7466 93.9357 35.6816 94.1792 35.6816C94.486 35.6816 94.7311 35.64 94.9129 35.5967C95.3209 35.5118 95.4236 35.0389 95.5043 34.4162C95.6071 33.5154 95.6071 31.8187 95.6071 29.8439V26.0658Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M110.995 26.0667C110.995 22.8048 110.995 22.2037 110.954 21.516C110.912 20.7867 110.75 20.4437 110.078 20.2922C109.914 20.2506 109.568 20.2289 109.283 20.2289C109.058 20.2289 108.935 20.1856 108.935 20.0358C108.935 19.8859 109.077 19.8426 109.384 19.8426C109.934 19.8426 110.526 19.8626 111.035 19.8626C111.565 19.8859 112.034 19.9059 112.319 19.9059C112.972 19.9059 117.028 19.9059 117.417 19.8859C117.802 19.8426 118.13 19.7993 118.291 19.756C118.394 19.7344 118.516 19.6711 118.617 19.6711C118.719 19.6711 118.738 19.756 118.738 19.8626C118.738 20.0141 118.639 20.2722 118.577 21.2579C118.557 21.4744 118.516 22.4185 118.474 22.6749C118.455 22.7831 118.413 22.9114 118.272 22.9114C118.13 22.9114 118.087 22.8048 118.087 22.61C118.087 22.4601 118.068 22.0955 117.965 21.8374C117.821 21.4527 117.619 21.1947 116.601 21.0664C116.253 21.0215 114.113 20.9799 113.706 20.9799C113.603 20.9799 113.563 21.0431 113.563 21.1947V26.6245C113.563 26.7743 113.584 26.8609 113.706 26.8609C114.153 26.8609 116.498 26.8609 116.966 26.8176C117.456 26.7743 117.761 26.7111 117.946 26.4963C118.087 26.3248 118.169 26.2165 118.272 26.2165C118.353 26.2165 118.413 26.2598 118.413 26.388C118.413 26.5179 118.334 26.8609 118.251 27.9549C118.231 28.3861 118.169 29.2437 118.169 29.3935C118.169 29.5667 118.169 29.8015 117.986 29.8015C117.844 29.8015 117.802 29.7165 117.802 29.6083C117.782 29.3935 117.782 29.1138 117.722 28.8357C117.619 28.4061 117.334 28.0848 116.579 27.9982C116.191 27.9549 114.175 27.9349 113.685 27.9349C113.584 27.9349 113.563 28.0198 113.563 28.148V29.8448C113.563 30.5741 113.543 32.5488 113.563 33.1716C113.603 34.6535 113.928 34.9732 116.009 34.9732C116.539 34.9732 117.394 34.9732 117.924 34.7168C118.455 34.4604 118.699 34.0075 118.841 33.13C118.882 32.8918 118.925 32.8053 119.066 32.8053C119.229 32.8053 119.229 32.9784 119.229 33.1932C119.229 33.6878 119.066 35.1464 118.965 35.5743C118.822 36.1321 118.639 36.1321 117.864 36.1321C116.335 36.1321 115.214 36.0905 114.338 36.0688C113.462 36.0272 112.83 36.0039 112.218 36.0039C111.993 36.0039 111.546 36.0039 111.055 36.0272C110.586 36.0272 110.056 36.0688 109.648 36.0688C109.384 36.0688 109.242 36.0039 109.242 35.854C109.242 35.7475 109.322 35.6825 109.568 35.6825C109.874 35.6825 110.118 35.6409 110.303 35.5959C110.709 35.511 110.812 35.0381 110.894 34.4154C110.995 33.5146 110.995 31.8195 110.995 29.8448V26.0667Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M122.754 35.8123C122.428 35.6608 122.368 35.5542 122.368 35.083C122.368 33.9008 122.449 32.6137 122.469 32.269C122.49 31.9493 122.55 31.7112 122.714 31.7112C122.898 31.7112 122.918 31.9043 122.918 32.0758C122.918 32.3556 122.999 32.8051 123.102 33.1715C123.549 34.7583 124.753 35.3394 126.016 35.3394C127.852 35.3394 128.747 34.0306 128.747 32.8917C128.747 31.8394 128.442 30.852 126.748 29.4583L125.814 28.6857C123.57 26.8392 122.795 25.3372 122.795 23.5989C122.795 21.2378 124.67 19.5428 127.504 19.5428C128.829 19.5428 129.686 19.7559 130.216 19.9058C130.399 19.949 130.5 20.014 130.5 20.1638C130.5 20.4436 130.418 21.0663 130.418 22.7397C130.418 23.2109 130.358 23.3841 130.194 23.3841C130.051 23.3841 129.99 23.2542 129.99 22.9978C129.99 22.8047 129.888 22.1386 129.46 21.5808C129.155 21.1729 128.565 20.5285 127.238 20.5285C125.73 20.5285 124.813 21.4509 124.813 22.7397C124.813 23.7271 125.282 24.4781 126.974 25.8301L127.543 26.2813C130.012 28.2345 130.888 29.7164 130.888 31.7545C130.888 33 130.439 34.4802 128.971 35.4892C127.951 36.1769 126.81 36.3701 125.73 36.3701C124.549 36.3701 123.632 36.2186 122.754 35.8123Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M138.447 21.0437L135.411 21.1286C134.228 21.1735 133.738 21.2801 133.433 21.7513C133.229 22.0743 133.128 22.3324 133.087 22.5023C133.045 22.6754 132.985 22.7604 132.862 22.7604C132.72 22.7604 132.68 22.6538 132.68 22.4174C132.68 22.0743 133.066 20.1212 133.107 19.9497C133.167 19.67 133.229 19.5418 133.351 19.5418C133.515 19.5418 133.719 19.7566 134.228 19.7998C134.82 19.8631 135.593 19.9064 136.266 19.9064H144.338C144.99 19.9064 145.439 19.8415 145.744 19.7998C146.051 19.7349 146.214 19.6916 146.294 19.6916C146.438 19.6916 146.457 19.8198 146.457 20.1429C146.457 20.5924 146.395 22.0743 146.395 22.6321C146.377 22.8469 146.335 22.9752 146.214 22.9752C146.051 22.9752 146.008 22.8686 145.991 22.5472L145.969 22.3108C145.927 21.7513 145.377 21.1502 143.564 21.1086L140.994 21.0437V29.8436C140.994 31.8184 140.994 33.5151 141.097 34.4376C141.159 35.0387 141.28 35.5116 141.892 35.5965C142.177 35.6398 142.626 35.6831 142.931 35.6831C143.156 35.6831 143.257 35.748 143.257 35.8546C143.257 36.0044 143.094 36.0694 142.871 36.0694C141.525 36.0694 140.241 36.0044 139.669 36.0044C139.203 36.0044 137.917 36.0694 137.101 36.0694C136.836 36.0694 136.695 36.0044 136.695 35.8546C136.695 35.748 136.775 35.6831 137.021 35.6831C137.326 35.6831 137.571 35.6398 137.754 35.5965C138.162 35.5116 138.284 35.0387 138.346 34.4159C138.447 33.5151 138.447 31.8184 138.447 29.8436V21.0437Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M150.207 26.0668C150.207 22.8049 150.207 22.2038 150.167 21.5161C150.126 20.7868 149.921 20.4205 149.473 20.314C149.25 20.2507 148.984 20.229 148.739 20.229C148.534 20.229 148.412 20.1857 148.412 20.0142C148.412 19.886 148.577 19.8427 148.902 19.8427C149.677 19.8427 150.961 19.906 151.552 19.906C152.062 19.906 153.265 19.8427 154.038 19.8427C154.304 19.8427 154.467 19.886 154.467 20.0142C154.467 20.1857 154.345 20.229 154.139 20.229C153.937 20.229 153.774 20.2507 153.53 20.2923C152.979 20.4005 152.816 20.7652 152.775 21.5161C152.735 22.2038 152.735 22.8049 152.735 26.0668V29.8449C152.735 31.9262 152.735 33.6229 152.816 34.5454C152.877 35.1248 153.02 35.5111 153.632 35.5961C153.916 35.641 154.365 35.6826 154.67 35.6826C154.895 35.6826 154.996 35.7476 154.996 35.8542C154.996 36.004 154.833 36.0689 154.609 36.0689C153.265 36.0689 151.979 36.004 151.429 36.004C150.961 36.004 149.677 36.0689 148.861 36.0689C148.596 36.0689 148.455 36.004 148.455 35.8542C148.455 35.7476 148.534 35.6826 148.781 35.6826C149.086 35.6826 149.329 35.641 149.514 35.5961C149.921 35.5111 150.042 35.1465 150.106 34.5238C150.207 33.6229 150.207 31.9262 150.207 29.8449V26.0668Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M171.588 34.6302C171.588 35.2113 171.568 35.253 171.323 35.4045C169.998 36.1321 168.001 36.3702 166.412 36.3702C161.417 36.3702 156.996 33.8809 156.996 27.9549C156.996 24.5215 158.686 22.1171 160.541 20.9366C162.498 19.6911 164.31 19.5413 166.023 19.5413C167.43 19.5413 169.225 19.7993 169.633 19.8859C170.059 19.9708 170.773 20.0991 171.242 20.1207C171.487 20.1423 171.527 20.2289 171.527 20.3788C171.527 20.6152 171.384 21.2163 171.384 23.8988C171.384 24.2418 171.323 24.35 171.16 24.35C171.019 24.35 170.977 24.2418 170.958 24.0703C170.896 23.5757 170.793 22.8897 170.263 22.2886C169.652 21.6026 168.021 20.6152 165.717 20.6152C164.596 20.6152 163.109 20.7002 161.682 21.9456C160.541 22.9547 159.807 24.5648 159.807 27.204C159.807 31.8196 162.599 35.2746 166.9 35.2746C167.43 35.2746 168.143 35.2746 168.633 35.0382C168.938 34.8883 169.021 34.6086 169.021 34.2456V32.2275C169.021 31.1535 169.021 30.3376 168.998 29.6949C168.98 28.9639 168.796 28.6209 168.124 28.4711C167.96 28.4278 167.613 28.4061 167.329 28.4061C167.144 28.4061 167.022 28.3629 167.022 28.2346C167.022 28.0631 167.164 28.0198 167.45 28.0198C168.51 28.0198 169.794 28.0848 170.406 28.0848C171.037 28.0848 172.118 28.0198 172.792 28.0198C173.056 28.0198 173.198 28.0631 173.198 28.2346C173.198 28.3629 173.076 28.4061 172.934 28.4061C172.77 28.4061 172.627 28.4278 172.384 28.4711C171.832 28.5777 171.628 28.9423 171.609 29.6949C171.588 30.3376 171.588 31.1968 171.588 32.2691V34.6302Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M177.274 26.0667C177.274 22.8048 177.274 22.2037 177.233 21.516C177.19 20.7867 177.029 20.4437 176.357 20.2922C176.193 20.2506 175.846 20.2289 175.562 20.2289C175.337 20.2289 175.214 20.1856 175.214 20.0358C175.214 19.8859 175.356 19.8426 175.663 19.8426C176.213 19.8426 176.805 19.8626 177.314 19.8626C177.843 19.8859 178.313 19.9059 178.598 19.9059C179.251 19.9059 183.306 19.9059 183.695 19.8859C184.083 19.8426 184.409 19.7993 184.57 19.756C184.673 19.7344 184.794 19.6711 184.896 19.6711C185 19.6711 185.017 19.756 185.017 19.8626C185.017 20.0141 184.918 20.2722 184.856 21.2579C184.835 21.4744 184.794 22.4185 184.753 22.6749C184.734 22.7831 184.692 22.9114 184.551 22.9114C184.409 22.9114 184.366 22.8048 184.366 22.61C184.366 22.4601 184.347 22.0955 184.244 21.8374C184.1 21.4527 183.898 21.1947 182.88 21.0664C182.532 21.0215 180.392 20.9799 179.984 20.9799C179.882 20.9799 179.842 21.0431 179.842 21.1947V26.6245C179.842 26.7743 179.863 26.8609 179.984 26.8609C180.432 26.8609 182.777 26.8609 183.245 26.8176C183.735 26.7743 184.04 26.7111 184.225 26.4963C184.366 26.3248 184.448 26.2165 184.551 26.2165C184.631 26.2165 184.692 26.2598 184.692 26.388C184.692 26.5179 184.613 26.8609 184.53 27.9549C184.51 28.3861 184.448 29.2437 184.448 29.3935C184.448 29.5667 184.448 29.8015 184.265 29.8015C184.122 29.8015 184.083 29.7165 184.083 29.6083C184.061 29.3935 184.061 29.1138 184.001 28.8357C183.898 28.4061 183.613 28.0848 182.857 27.9982C182.472 27.9549 180.454 27.9349 179.964 27.9349C179.863 27.9349 179.842 28.0198 179.842 28.148V29.8448C179.842 30.5741 179.821 32.5488 179.842 33.1716C179.882 34.6535 180.207 34.9732 182.288 34.9732C182.818 34.9732 183.673 34.9732 184.203 34.7168C184.734 34.4604 184.978 34.0075 185.12 33.13C185.161 32.8918 185.204 32.8053 185.345 32.8053C185.507 32.8053 185.507 32.9784 185.507 33.1932C185.507 33.6878 185.345 35.1464 185.243 35.5743C185.101 36.1321 184.918 36.1321 184.143 36.1321C182.614 36.1321 181.493 36.0905 180.617 36.0688C179.741 36.0272 179.108 36.0039 178.496 36.0039C178.272 36.0039 177.824 36.0039 177.334 36.0272C176.865 36.0272 176.335 36.0688 175.929 36.0688C175.663 36.0688 175.521 36.0039 175.521 35.854C175.521 35.7475 175.601 35.6825 175.846 35.6825C176.153 35.6825 176.397 35.6409 176.582 35.5959C176.988 35.511 177.091 35.0381 177.173 34.4154C177.274 33.5146 177.274 31.8195 177.274 29.8448V26.0667Z"
                              fill="white"></path>
                    </svg>
                </li>
                <li>
                    <svg width="177" height="56" viewbox="0 0 177 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M82.5489 13.8701V40.5887H87.6794V25.793L103.476 41.4365V14.8132H98.3485V29.1843L82.5489 13.8701Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M111.537 36.6778H116.117C117.261 36.5826 119.231 35.5474 119.231 33.1913C119.231 30.9288 117.261 29.8452 116.209 29.7984H111.537V36.6778ZM111.537 25.3687H115.477C117.033 25.1797 118.225 23.9556 118.225 22.2115C118.225 20.3738 116.668 19.337 115.384 19.2433H111.537V25.3687ZM106.363 14.9073H117.172C118.819 14.9073 123.49 16.1799 123.674 21.4105C123.81 25.2734 120.697 27.0643 120.697 27.0643C122.392 27.8653 124.956 29.892 124.956 33.9454C124.956 37.9036 121.568 40.8233 118.636 40.8233H106.363V14.9073Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M144.511 20.4672C139.107 16.7449 131.78 20.5141 131.276 27.3952C131.092 35.7345 139.06 39.1759 144.511 35.5472V40.8716C134.939 44.5471 126.147 37.6208 126.101 27.5357C126.147 19.0074 135.306 11.4674 144.511 15.2366V20.4672Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M68.9939 30.0808L56.1699 38.8918L60.4749 28.3367L62.5372 23.4355C63.3595 21.8335 64.9164 20.8436 66.6114 20.7967C68.2609 20.7967 69.6797 21.5994 70.5963 23.0592C71.5583 24.5207 71.6038 26.8769 70.6418 28.3367C70.2745 29.0441 69.6342 29.6561 68.9939 30.0808Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M62.6272 21.7398L56.3086 37.1493L56.0339 35.452L54.1098 22.8234C54.0188 22.0693 54.3389 21.4104 54.9338 20.9857L55.8503 20.4205C55.8958 20.2315 55.6212 20.1379 55.5302 20.091H53.7441C53.6515 18.2533 54.3845 16.6028 55.8958 15.6145C57.04 14.8119 58.826 14.6246 60.1553 15.2835C61.8487 15.9908 62.9929 17.8285 63.0399 19.7131C62.9929 20.4205 62.8563 21.1278 62.6272 21.7398Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M50.4453 37.2438L44.2178 21.7876C43.5304 20.1371 43.8505 17.9699 44.9947 16.6037C46.2314 15.1891 47.9735 14.6239 49.7595 15.0954C51.2693 15.4733 52.6896 16.98 53.0553 18.5352C53.239 19.1472 53.1934 19.8545 53.1934 20.515L50.4453 37.2438Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M37.073 29.5147C35.7923 28.3843 35.2414 26.8291 35.4251 25.085C35.6071 23.2941 36.9804 21.5516 38.6299 21.0332C40.3249 20.5148 42.1564 20.9379 43.3476 22.2121C43.8498 22.7289 44.1716 23.2941 44.4462 23.9077L50.4917 38.9393L37.073 29.5147Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M35.7457 40.4941C34.0963 40.3067 32.814 39.3636 31.9901 37.8085C31.2116 36.2065 31.3952 33.944 32.4468 32.5778C33.5925 31.1647 35.2875 30.4106 36.9809 30.7869C37.6699 30.8821 38.2631 31.2116 38.814 31.541L51.7745 40.5409L35.7457 40.4941Z"
                              fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M70.9634 40.4941C72.6113 40.3067 73.8936 39.3636 74.7191 37.8085C75.4975 36.2065 75.3123 33.944 74.2608 32.5778C73.1151 31.1647 71.4201 30.4106 69.7267 30.7869C69.0393 30.8821 68.4445 31.2116 67.8951 31.541L54.9331 40.5409L70.9634 40.4941Z"
                              fill="white"></path>
                    </svg>
                </li>
            </ul>
        </div>
    </div>
    <div class="home-reviews">
        <div class="container">
            <div class="cards">
                <div class="card">
                    <p class="stars">
                        <svg width="42" height="40" viewbox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.8493 15.29L39.7383 17.0733L34.1399 21.8027L30.2172 25.1166L31.6829 30.9593L33.2708 37.288L33.941 39.9588L31.5763 38.4843L24.4484 34.0406L20.925 31.8438L18.044 33.6398L10.273 38.4851L7.90833 39.9588L8.58449 37.2655L11.106 27.2154L11.6321 25.1166L5.68547 20.0926L2.11179 17.0733L0 15.29L2.76094 15.0979L10.5935 14.5528L15.1818 14.2335L17.4399 8.65326L19.8804 2.62215L20.925 0.0410156L21.9689 2.62215L24.6503 9.24845L26.6675 14.2335L31.9162 14.5984L39.0884 15.0979L41.8493 15.29Z"
                                fill="#FFBD00"></path>
                        </svg>
                        <svg width="42" height="40" viewbox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.8493 15.29L39.7383 17.0733L34.1399 21.8027L30.2172 25.1166L31.6829 30.9593L33.2708 37.288L33.941 39.9588L31.5763 38.4843L24.4484 34.0406L20.925 31.8438L18.044 33.6398L10.273 38.4851L7.90833 39.9588L8.58449 37.2655L11.106 27.2154L11.6321 25.1166L5.68547 20.0926L2.11179 17.0733L0 15.29L2.76094 15.0979L10.5935 14.5528L15.1818 14.2335L17.4399 8.65326L19.8804 2.62215L20.925 0.0410156L21.9689 2.62215L24.6503 9.24845L26.6675 14.2335L31.9162 14.5984L39.0884 15.0979L41.8493 15.29Z"
                                fill="#FFBD00"></path>
                        </svg>
                        <svg width="42" height="40" viewbox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.8493 15.29L39.7383 17.0733L34.1399 21.8027L30.2172 25.1166L31.6829 30.9593L33.2708 37.288L33.941 39.9588L31.5763 38.4843L24.4484 34.0406L20.925 31.8438L18.044 33.6398L10.273 38.4851L7.90833 39.9588L8.58449 37.2655L11.106 27.2154L11.6321 25.1166L5.68547 20.0926L2.11179 17.0733L0 15.29L2.76094 15.0979L10.5935 14.5528L15.1818 14.2335L17.4399 8.65326L19.8804 2.62215L20.925 0.0410156L21.9689 2.62215L24.6503 9.24845L26.6675 14.2335L31.9162 14.5984L39.0884 15.0979L41.8493 15.29Z"
                                fill="#FFBD00"></path>
                        </svg>
                        <svg width="42" height="40" viewbox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.8493 15.29L39.7383 17.0733L34.1399 21.8027L30.2172 25.1166L31.6829 30.9593L33.2708 37.288L33.941 39.9588L31.5763 38.4843L24.4484 34.0406L20.925 31.8438L18.044 33.6398L10.273 38.4851L7.90833 39.9588L8.58449 37.2655L11.106 27.2154L11.6321 25.1166L5.68547 20.0926L2.11179 17.0733L0 15.29L2.76094 15.0979L10.5935 14.5528L15.1818 14.2335L17.4399 8.65326L19.8804 2.62215L20.925 0.0410156L21.9689 2.62215L24.6503 9.24845L26.6675 14.2335L31.9162 14.5984L39.0884 15.0979L41.8493 15.29Z"
                                fill="#FFBD00"></path>
                        </svg>
                        <svg width="42" height="40" viewbox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.8493 15.29L39.7383 17.0733L34.1399 21.8027L30.2172 25.1166L31.6829 30.9593L33.2708 37.288L33.941 39.9588L31.5763 38.4843L24.4484 34.0406L20.925 31.8438L18.044 33.6398L10.273 38.4851L7.90833 39.9588L8.58449 37.2655L11.106 27.2154L11.6321 25.1166L5.68547 20.0926L2.11179 17.0733L0 15.29L2.76094 15.0979L10.5935 14.5528L15.1818 14.2335L17.4399 8.65326L19.8804 2.62215L20.925 0.0410156L21.9689 2.62215L24.6503 9.24845L26.6675 14.2335L31.9162 14.5984L39.0884 15.0979L41.8493 15.29Z"
                                fill="#FFBD00"></path>
                        </svg>
                    </p>
                    <p class="title">Awesome platform...</p>
                    <p class="author"><strong>Brandon G.</strong> from <strong>US</strong>, <strong>Aug 10,
                            2021</strong></p>
                    <p class="review">Awesome platform for those who are looking to invest, but don’t have a lot of
                        start-up capital. I highly recommend it.</p></div>
                <div class="card">
                    <p class="stars">
                        <svg width="42" height="40" viewbox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.8493 15.29L39.7383 17.0733L34.1399 21.8027L30.2172 25.1166L31.6829 30.9593L33.2708 37.288L33.941 39.9588L31.5763 38.4843L24.4484 34.0406L20.925 31.8438L18.044 33.6398L10.273 38.4851L7.90833 39.9588L8.58449 37.2655L11.106 27.2154L11.6321 25.1166L5.68547 20.0926L2.11179 17.0733L0 15.29L2.76094 15.0979L10.5935 14.5528L15.1818 14.2335L17.4399 8.65326L19.8804 2.62215L20.925 0.0410156L21.9689 2.62215L24.6503 9.24845L26.6675 14.2335L31.9162 14.5984L39.0884 15.0979L41.8493 15.29Z"
                                fill="#FFBD00"></path>
                        </svg>
                        <svg width="42" height="40" viewbox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.8493 15.29L39.7383 17.0733L34.1399 21.8027L30.2172 25.1166L31.6829 30.9593L33.2708 37.288L33.941 39.9588L31.5763 38.4843L24.4484 34.0406L20.925 31.8438L18.044 33.6398L10.273 38.4851L7.90833 39.9588L8.58449 37.2655L11.106 27.2154L11.6321 25.1166L5.68547 20.0926L2.11179 17.0733L0 15.29L2.76094 15.0979L10.5935 14.5528L15.1818 14.2335L17.4399 8.65326L19.8804 2.62215L20.925 0.0410156L21.9689 2.62215L24.6503 9.24845L26.6675 14.2335L31.9162 14.5984L39.0884 15.0979L41.8493 15.29Z"
                                fill="#FFBD00"></path>
                        </svg>
                        <svg width="42" height="40" viewbox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.8493 15.29L39.7383 17.0733L34.1399 21.8027L30.2172 25.1166L31.6829 30.9593L33.2708 37.288L33.941 39.9588L31.5763 38.4843L24.4484 34.0406L20.925 31.8438L18.044 33.6398L10.273 38.4851L7.90833 39.9588L8.58449 37.2655L11.106 27.2154L11.6321 25.1166L5.68547 20.0926L2.11179 17.0733L0 15.29L2.76094 15.0979L10.5935 14.5528L15.1818 14.2335L17.4399 8.65326L19.8804 2.62215L20.925 0.0410156L21.9689 2.62215L24.6503 9.24845L26.6675 14.2335L31.9162 14.5984L39.0884 15.0979L41.8493 15.29Z"
                                fill="#FFBD00"></path>
                        </svg>
                        <svg width="42" height="40" viewbox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.8493 15.29L39.7383 17.0733L34.1399 21.8027L30.2172 25.1166L31.6829 30.9593L33.2708 37.288L33.941 39.9588L31.5763 38.4843L24.4484 34.0406L20.925 31.8438L18.044 33.6398L10.273 38.4851L7.90833 39.9588L8.58449 37.2655L11.106 27.2154L11.6321 25.1166L5.68547 20.0926L2.11179 17.0733L0 15.29L2.76094 15.0979L10.5935 14.5528L15.1818 14.2335L17.4399 8.65326L19.8804 2.62215L20.925 0.0410156L21.9689 2.62215L24.6503 9.24845L26.6675 14.2335L31.9162 14.5984L39.0884 15.0979L41.8493 15.29Z"
                                fill="#FFBD00"></path>
                        </svg>
                        <svg width="42" height="40" viewbox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.8493 15.29L39.7383 17.0733L34.1399 21.8027L30.2172 25.1166L31.6829 30.9593L33.2708 37.288L33.941 39.9588L31.5763 38.4843L24.4484 34.0406L20.925 31.8438L18.044 33.6398L10.273 38.4851L7.90833 39.9588L8.58449 37.2655L11.106 27.2154L11.6321 25.1166L5.68547 20.0926L2.11179 17.0733L0 15.29L2.76094 15.0979L10.5935 14.5528L15.1818 14.2335L17.4399 8.65326L19.8804 2.62215L20.925 0.0410156L21.9689 2.62215L24.6503 9.24845L26.6675 14.2335L31.9162 14.5984L39.0884 15.0979L41.8493 15.29Z"
                                fill="#FFBD00"></path>
                        </svg>
                    </p>
                    <p class="title">Easy investment platform...</p>
                    <p class="author"><strong>T.T.</strong> from <strong>US</strong>, <strong>Aug 9, 2021</strong></p>
                    <p class="review">Easy investment platform that offers a good alternative for diversification.</p>
                </div>
            </div>
            <div class="newsletter-banner">
                <form
                    action="#"
                    class="newsletter-form">
                    <div class="success-message"><p>Thank you for connecting with us! You’ve taken the first step in
                            your real estate investing journey!</p></div>
                    <p class="title">Don't miss out on the latest investment trends!</p>
                    <p class="subtitle">Get them in your mailbox every month</p>
                    <fieldset><input type="email" name="email" placeholder="your.email@example.com" required
                                     class="json-pick"/>
                        <button type="submit" class="btn strong mobile-weak">Subscribe</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

@endsection
