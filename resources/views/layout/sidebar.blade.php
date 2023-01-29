

 <div class="ec-pro-leftside ec-common-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
     <div class="ec-sidebar-wrap">
         <!-- Sidebar Category Block -->
         <div class="ec-sidebar-block">
             <div class="ec-sb-title">
                 <h3 class="ec-sidebar-title">Category</h3>
             </div>
             <div class="ec-sb-block-content">
                 <ul>
                     <li>
                         @php
                         $categories = App\Models\Category::all();
                         @endphp
                         @foreach($categories as $category)
                         @if($category->parent_category==null)
                         <div class="ec-sidebar-block-item">{{ $category->category_name }}</div>
                         @endif
                         <ul style="display: block;">
                             <li>
                                 @php
                                 $sub_category = App\Models\Category::where('parent_category',$category->id)->get();
                                 @endphp
                                 @foreach($sub_category as $data)
                                 <div class="ec-sidebar-sub-item"><a href="#">{{ $data->category_name }}
                                         @php
                                         $items = App\Models\Product::where('category_id',$data->id)->get();
                                         @endphp
                                         <span>-{{ $items->count() }}</span></a>

                                     @endforeach

                                 </div>
                             </li>
                             {{-- <li>
                                    <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                    </div>
                                </li> --}}
                         </ul>
                         @endforeach

                     </li>
                 </ul>
             </div>
