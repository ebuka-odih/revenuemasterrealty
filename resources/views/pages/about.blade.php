@extends('pages.layout.app')
@section('content')

<div class="about-hero">
    <div class="container"><h1 class="main-title">We were <span>founded</span> with a <span>mission in mind</span></h1>
        <p class="banner">Offering the benefits of a wealth-building diversified portfolio to the everyday investor.</p>
    </div>
</div>
<div class="about-intro">
    <div class="container"><img alt=""
                                nitro-lazy-src="https://cdn-fiiij.nitrocdn.com/yWNxOhTOUCABTanWOzXhJAIrPGprxXkC/assets/images/optimized/rev-6b43058/diversyfund.com/wp-content/themes/diversyfund2.0/images/aboutus/graphic.jpg"
                                class="image nitro-lazy" decoding="async" nitro-lazy-empty id="MTg3OjEyNA==-1"
                                src="data:image/svg+xml;nitro-empty-id=MTg3OjEyNA==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQxNiAxNTI0IiB3aWR0aD0iMjQxNiIgaGVpZ2h0PSIxNTI0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg=="/>
        <div class="wrapper"><p class="title">We do this with institutional-quality multifamily private-market real
                estate.</p>
            <p class="subtitle">For decades, only the wealthy had access to private-market real estate assets. The JOBS
                act of 2012 made it possible for everyone to invest in institutional-quality real estate by removing
                barriers that previously made it impossible. Our fintech platform is dedicated to helping investors add
                the power of wealth creation through real estate to their portfolios.</p></div>
    </div>
</div>
<div class="about-founders container"><p class="title">We have brought together a <span>team of professionals</span></p>
    <p class="subtitle">-With decades of experience across real estate and investing-</p>
    <p class="description">To help us offer wealth-building opportunities to everyone, accredited or not, with our
        value-add real estate growth plans.</p>
    <div class="cards">
        <div class="card"><a href="https://www.linkedin.com/in/craigcecilio/" class="avatar" target="_blank"> <img
                    alt=""
                    nitro-lazy-src="https://cdn-fiiij.nitrocdn.com/yWNxOhTOUCABTanWOzXhJAIrPGprxXkC/assets/images/optimized/rev-6b43058/diversyfund.com/wp-content/themes/diversyfund2.0/images/aboutus/craig.png"
                    class="image nitro-lazy" decoding="async" nitro-lazy-empty id="MjA0OjEzNA==-1"
                    src="data:image/svg+xml;nitro-empty-id=MjA0OjEzNA==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMzg2IDM4NiIgd2lkdGg9IjM4NiIgaGVpZ2h0PSIzODYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+"/>
                <p class="name">Craig Cecilio</p>
                <p class="title1">Co-Founder and Chief</p>
                <p class="title2">Executive Officer</p></a>
            <p class="bio">Craig Cecilio is the Founder/CEO of DiversyFund. He imagines a world where everyone has an
                equal opportunity to build wealth and believes the American Dream should be available to everyone,
                regardless of socioeconomic status. Over his 25+ years of experience in capital raising, deal
                structuring, and the real estate industry, Craig has conducted over 1,000 transactions encompassing
                development, financing, and syndicating projects across multiple verticals, including but not limited to
                residential, multifamily, and commercial asset classes.</p></div>
        <div class="card"><a href="https://www.linkedin.com/in/alan-lewis-3575711/" class="avatar" target="_blank"> <img
                    alt=""
                    nitro-lazy-src="https://cdn-fiiij.nitrocdn.com/yWNxOhTOUCABTanWOzXhJAIrPGprxXkC/assets/images/optimized/rev-6b43058/diversyfund.com/wp-content/themes/diversyfund2.0/images/aboutus/alan.png"
                    class="image nitro-lazy" decoding="async" nitro-lazy-empty id="MjE0OjEzMw==-1"
                    src="data:image/svg+xml;nitro-empty-id=MjE0OjEzMw==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMzg2IDM4NiIgd2lkdGg9IjM4NiIgaGVpZ2h0PSIzODYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+"/>
                <p class="name">Alan Lewis</p>
                <p class="title1">Co-Founder and Chief</p>
                <p class="title2">Investment Officer</p></a>
            <p class="bio">Alan Lewis is the Co-Founder/CIO of DiversyFund. With his Wall Street background and
                credentials in corporate law and real estate private equity, Alan brings the investment knowledge and
                skills needed to build diversified portfolios for our investors. He has worked on transactions totalling
                over $41 billion over the course of his career, including acquisitions and portfolio restructurings for
                a $6 billion real estate fund.</p></div>
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

@endsection
